export const _updateSingleLedState = function(led, newArtValue) {
    // Detectamos si el estado objetivo ha cambiado desde el último fotograma.
    const targetChanged = led.targetArtValue !== newArtValue;
    led.targetArtValue = newArtValue;

    if(this.grid.isSparse) {
        if(targetChanged) {
            if(newArtValue > 0) {
                led.lifespan = this.options.grid.lifespan;
            }
            // Si se apaga (newArtValue = 0), el contador comenzará a bajar a continuación.
        }

        if(newArtValue === 0 && led.lifespan > 0) {
            // Si se apaga (newArtValue = 0), el contador comenzará a bajar a continuación.
            led.lifespan -= 1;
        }
    }
    // --- Fase 1: Gestión de Interrupciones y Nuevas Transiciones ---
    
    // Si el objetivo cambia, debemos interrumpir cualquier acción actual y reaccionar inmediatamente.
    // Esto resuelve el error visual al asegurar que siempre nos movemos hacia el objetivo más reciente.
    if (targetChanged) {
        // Calculamos los parámetros y el retardo para la NUEVA transición.
        led.delayTimer = this._prepareTransition(led, led.targetArtValue);

        if (led.delayTimer > 0) {
            // Si la nueva transición requiere un retraso, pasamos a estado Delayed.
            led.isDelayed = true;
            led.isTransitioning = false; // Detenemos la transición anterior.
        } else {
            // Si no requiere retraso, comenzamos la transición inmediatamente.
            led.isDelayed = false;
            led.isTransitioning = true;
        }
    }

    // --- Fase 2: Manejo del estado de Retraso (Delay) ---
    if (led.isDelayed) {
        led.delayTimer -= 1; // Conteo por fotogramas.
        if (led.delayTimer <= 0) {
            led.isDelayed = false;
            led.isTransitioning = true;
            // Revalidación de seguridad: Resolvemos condiciones de carrera si el estado cambió durante el retraso.
            this._prepareTransition(led, led.targetArtValue);
        }
        // Importante: Salimos aquí. Esperamos a que termine el retraso.
        return;
    }

    // --- Fase 3: Ejecución de la Transición Activa ---
    if (led.isTransitioning) {
        const speed = led.transitionSpeed;
        
        // OPTIMIZACIÓN: Interpolación Lineal Exponencial (Inline Lerp)
        // Usamos la forma a += (b - a) * t. Es mucho más rápido que llamar a una función externa lerp().
        led.currentSize += (led.targetSize - led.currentSize) * speed;
        // Movemos el cálculo de opacidad aquí (desde draw).
        led.currentOpacity += (led.targetOpacity - led.currentOpacity) * speed;

        // Comprobar si la transición ha finalizado.
        // Usamos un umbral (threshold) muy pequeño para la comparación de flotantes.
        const threshold = 0.01;
        const sizeFinished = Math.abs(led.currentSize - led.targetSize) < threshold;
        const opacityFinished = Math.abs(led.currentOpacity - led.targetOpacity) < threshold;

        if (sizeFinished && opacityFinished) {
            // Sincronizar estado final exactamente.
            led.currentSize = led.targetSize;
            led.currentOpacity = led.targetOpacity;
            
            // Confirmamos el cambio de estado lógico.
            led.currentArtValue = led.targetArtValue;
            
            // Reiniciar bandera de transición.
            led.isTransitioning = false;
            
            // Si el LED se ha apagado completamente, reseteamos el color de referencia.
            if (led.currentArtValue === 0) {
                led.artValueForColor = 0;
            }
        }
    }
}
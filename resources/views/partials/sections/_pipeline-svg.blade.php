<svg
          viewBox="0 0 760 240"
          class="w-full h-32 sm:h-auto sm:aspect-[24/9] block"
          fill="none"
          stroke="currentColor"
          preserveAspectRatio="xMidYMid meet"
        >
          <defs>
            <linearGradient id="pipeStroke" x1="0" y1="0" x2="760" y2="0" gradientUnits="userSpaceOnUse">
              <stop offset="0"   stop-color="#FFFFFF" stop-opacity="0.95"/>
              <stop offset="0.5" stop-color="#D7B2FF" stop-opacity="1"/>
              <stop offset="1"   stop-color="#B572FF" stop-opacity="0.95"/>
            </linearGradient>

            <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
              <feGaussianBlur stdDeviation="3" result="b"/>
              <feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge>
            </filter>
          </defs>

          <!-- curva centrada en y=120 -->
          <path
            data-pipe-path
            d="M30 120 C 200 40, 300 200, 380 120 S 560 40, 730 120"
            stroke="url(#pipeStroke)"
            stroke-width="3.5"
            stroke-linecap="round"
            vector-effect="non-scaling-stroke"
          />

          <!-- nodos (se posicionan por JS) -->
          <g data-pipe-nodes>
            <circle r="9" fill="#B572FF" stroke="#fff" stroke-width="2.5" filter="url(#glow)"></circle>
            <circle r="9" fill="#B572FF" stroke="#fff" stroke-width="2.5" filter="url(#glow)"></circle>
            <circle r="9" fill="#B572FF" stroke="#fff" stroke-width="2.5" filter="url(#glow)"></circle>
            <circle r="9" fill="#B572FF" stroke="#fff" stroke-width="2.5" filter="url(#glow)"></circle>
            <circle r="9" fill="#B572FF" stroke="#fff" stroke-width="2.5" filter="url(#glow)"></circle>
          </g>

          <!-- “paquete” que recorre la curva -->
          <g data-pipe-packet opacity="0">
            <circle r="6.5" fill="#fff"></circle>
            <circle r="6.5" fill="#B572FF" opacity="0.9" filter="url(#glow)"></circle>
          </g>
        </svg>
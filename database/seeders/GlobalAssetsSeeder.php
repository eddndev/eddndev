<?php

namespace Database\Seeders;

use App\Models\LogoAsset;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GlobalAssetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Main Logo
        $logoName = 'logo.png';
        $logoPath = resource_path("images/{$logoName}");

        if (File::exists($logoPath)) {
            // Create DB Record
            $asset = LogoAsset::firstOrCreate(
                ['original_path' => $logoName],
                [
                    'title' => 'EDDN Logo',
                    'alt'   => 'Logotipo oficial de EDDN.DEV',
                ]
            );

            // Attach Media (Clear previous to ensure fresh processing)
            $asset->clearMediaCollection('default');

            $asset->addMedia($logoPath)
                ->preservingOriginal()
                ->toMediaCollection('default');

            $this->command->info("Logo '{$logoName}' seeded and processed.");
        } else {
            $this->command->warn("Logo file not found at: {$logoPath}");
        }

        // 2. Profile Image (The Operator)
        $profileName = 'profile.jpg';
        $profilePath = resource_path("images/{$profileName}");

        if (File::exists($profilePath)) {
            $asset = LogoAsset::firstOrCreate(
                ['original_path' => $profileName],
                [
                    'title' => 'Operator Profile',
                    'alt'   => 'Eduardo Alonso - Full Stack Engineer',
                ]
            );

            $asset->clearMediaCollection('default');
            $asset->addMedia($profilePath)
                ->preservingOriginal()
                ->withResponsiveImages()
                ->toMediaCollection('default');
            
            $this->command->info("Profile '{$profileName}' seeded and processed.");
        } else {
            $this->command->warn("Profile file not found at: {$profilePath}");
        }
    }
}

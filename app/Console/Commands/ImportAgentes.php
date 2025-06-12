<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Storage;
use App\Models\Agentes;
use Illuminate\Console\Command;

class ImportAgentes extends Command
{
    protected $signature = 'import:agentes';
    protected $description = 'Import agentes from CSV file based on column order and skip existing by nomina';

    public function handle()
    {
        $path = storage_path('app/agentes.csv');

        if (!file_exists($path)) {
            $this->error("File not found: $path");
            return;
        }

        $file = fopen($path, 'r');

        // Skip header
        fgetcsv($file);

        $imported = 0;
        $skipped = 0;

        while (($row = fgetcsv($file)) !== false) {
            $nomina = $row[0] ?? null;

            if (!$nomina) {
                $this->warn('Skipping row with empty nomina');
                continue;
            }

            // Check if already exists
            if (Agentes::where('nomina', $nomina)->exists()) {
                $skipped++;
                continue;
            }

            Agentes::create([
                'nomina'        => $nomina,
                'nombre'        => $row[1] ?? null,
                'asignacion'    => $row[2] ?? null,
                'ingreso'       => $row[3] ?? null,
                'nds'           => $row[4] ?? null,
                'telefonos'     => $row[5] ?? null,
                'beneficiarios' => $row[6] ?? null,
                'curp'          => $row[7] ?? null,
                'cuip'          => $row[8] ?? null,
                'cargo'         => null,
                'imagen'        => null,
                'misc'          => null,
            ]);

            $imported++;
        }

        fclose($file);

        $this->info("Imported: $imported agentes");
        $this->info("Skipped (already existed): $skipped agentes");
    }
}

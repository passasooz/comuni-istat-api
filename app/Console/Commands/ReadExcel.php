<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;
use Str;
use Storage;

class ReadExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'excel:json';

    protected $external_url = 'https://www.istat.it/storage/codici-unita-amministrative/Elenco-comuni-italiani.xls';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert Excel to JSON data';

    private function _returnFormatColumnValue($string)
    {
        return Str::slug($string, '_');
    }

    private function _returnFormatCellValue($string)
    {
        if(str_contains($string, '/')) {
            $string = preg_replace('([^\/]+$)', '', $string);
            return trim(str_replace('/', '', $string));
        }

        return $string;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try{
            $this->line('starting extraction..');
            $this->line('download data from ISTAT source');
            $file_contents = file_get_contents($this->external_url);
            $this->line('putting data into local storage');
            Storage::put('Elenco-comuni-italiani.xls', $file_contents);
            $path = storage_path('Elenco-comuni-italiani.xls');
            $this->line('loading Excel..');
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($path);
            $worksheet = $spreadsheet->getActiveSheet();
            $columns = [];
            $rows = [];
            foreach ($worksheet->getRowIterator() AS $index => $row) {
                $this->newLine();
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(FALSE);
                $cells = [];
                foreach ($cellIterator as $cell) {
                    $cells[] = $cell->getValue();
                    if($index === 1) {
                        array_push($columns, self::_returnFormatColumnValue($cell->getValue()));
                    }
                }
                if($index !== 1) {
                    $rows[] = $cells;
                }
            }
            $data = [];
            foreach($rows as $index => $row) {
                $item = [];
                foreach($row as $i => $value) {
                    $item[$columns[$i]] = self::_returnFormatCellValue($value);
                }
                $data[] = $item;
                $this->newLine();
            }
            $this->line('encoding into a json file..');
            $data_json = json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
            if(File::exists(storage_path('formatData.json'))) {
                File::delete(storage_path('formatData.json'));
            }
            File::put(storage_path('formatData.json'), $data_json);
            $this->info('File created with success!');
        } catch(\Exception $e) {
            $this->error($e->getMessage());
        }
    }
}

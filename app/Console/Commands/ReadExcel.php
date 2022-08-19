<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class ReadExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'excel:json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert Excel to JSON data';

    private function _returnFormaCellValue($string)
    {
        return trim(preg_replace('/\s\s+/', ' ', $string));
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
            $path = storage_path('Elenco-comuni-italiani.xls');
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
                        array_push($columns, self::_returnFormaCellValue($cell->getValue()));
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
                    $item[$columns[$i]] = $value;
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

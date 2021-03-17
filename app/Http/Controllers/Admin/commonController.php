<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;


class commonController extends Controller
{
    public static function getValueStatic($table,$column,$key,$value)
    {
        $result = DB::table($table)
          ->where($key, $value)
          ->value($column);
        return $result;
    }

    public function getValue($table,$column,$key,$value)
    {
        $result = DB::table($table)
          ->where($key, $value)
          ->value($column);
        return $result;
    }


    public static function myQuery($sql)
    {
        $res = DB::select($sql);
        return $res[0]->resCol;
    }


  public function EditData(Request $request)
  {
      $table = $request->table;
      $key = $request->key;
      $value = $request->value;
      $data = DB::table($table)->where($key, $value)->first();
      return json_encode($data);
  }

  public function fetchSelectOption(Request $request){

    $table = $request->table;
    $id = $request->id;
    $value = $request->value;    

    $collection=DB::table($table)->get();
    $select_option='';
    $select_option.="<option value=''>Select an Option</option>";
    foreach ($collection as $row) {
        $select_option.="<option value='".$row->$id."'>".$row->$value."</option>";
    }
    return $select_option;

}

  public function getSelectOption(Request $request){

    $table = $request->table;
    $id = $request->id;
    $key = $request->key;
    $value = $request->value;    
    $column = $request->column;

    $collection=DB::table($table)->where($id, $key)->get();
    $select_option='';
    $select_option.="<option value=''>Select an Option</option>";
    foreach ($collection as $row) {
        $select_option.="<option value='".$row->$value."'>".$row->$column."</option>";
    }
    return $select_option;

}


public function getSelectOption2(Request $request){

  $table = $request->table;
  $id = $request->id;
  $key = $request->key;
  $value = $request->value;    
  $column = $request->column;
  $column2 = $request->column2;

  $collection=DB::table($table)->where($id, $key)->get();
  $select_option='';
  $select_option.="<option value=''>Select an Option</option>";
  foreach ($collection as $row) {
      $select_option.="<option value='".$row->$value."'>".$row->$column." (".$row->$column2.")</option>";
  }
  return $select_option;

}


public function destroy(Request $request)
{
  $table = $request->table;
  $key = $request->key;
  $value = $request->value;

    DB::table($table)->where($key, $value)->delete();
    $request->session()->flash('message', 'Deleted Successfully');
    return Redirect::back();
}


public function databaseBackup(Request $request)
    {
            $time = date('dmYHis',strtotime(now()));
            // Database configuration
            $host = env('DB_HOST');
            $username = 'rashmfyw_tamanna';
            $password = 'Tamanna##007##';
            $database_name = 'rashmfyw_tamanna';

            // Get connection object and set the charset
            $conn = mysqli_connect($host, $username, $password, $database_name);
            $conn->set_charset("utf8");


            // Get All Table Names From the Database
            $tables = array();
            $sql = "SHOW TABLES";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_row($result)) {
            $tables[] = $row[0];
            }

            $sqlScript = "";
            foreach ($tables as $table) {

            // Prepare SQLscript for creating table structure
            $query = "SHOW CREATE TABLE $table";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_row($result);

            $sqlScript .= "\n\n" . $row[1] . ";\n\n";


            $query = "SELECT * FROM $table";
            $result = mysqli_query($conn, $query);

            $columnCount = mysqli_num_fields($result);

            // Prepare SQLscript for dumping data for each table
            for ($i = 0; $i < $columnCount; $i ++) {
            while ($row = mysqli_fetch_row($result)) {
                $sqlScript .= "INSERT INTO $table VALUES(";
                for ($j = 0; $j < $columnCount; $j ++) {
                    $row[$j] = $row[$j];
                    
                    if (isset($row[$j])) {
                        $sqlScript .= '"' . $row[$j] . '"';
                    } else {
                        $sqlScript .= '""';
                    }
                    if ($j < ($columnCount - 1)) {
                        $sqlScript .= ',';
                    }
                }
                $sqlScript .= ");\n";
            }
            }

            $sqlScript .= "\n"; 
            }

            header('Content-Type: application/txt');
            header('Content-Disposition: attachment; filename=survey_sql_export_'.$time.'.sql');
            echo $sqlScript;
    }



    public function commonDeleteRecord(Request $request)
    {
        $table = $request->table;
        $key = $request->key;
        $value = $request->value;

        DB::table($table)->where($key, $value)->delete();
        $request->session()->flash('message', 'Record Deleted Successfully');
        return Redirect::back();


    }

    public function getDriverFromTruck(Request $request)
    {
        return DB::table('driver_mappings')->where('vehicle', $request->truckId)->value('driver');
    }


    public static function getIndianCurrency(float $number)
    {

        $decimal = round($number - ($no = floor($number)), 2) * 100;
        $hundred = null;
        $digits_length = strlen($no);
        $i = 0;
        $str = array();
        $words = array(0 => '', 1 => 'one', 2 => 'two',
            3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
            7 => 'seven', 8 => 'eight', 9 => 'nine',
            10 => 'ten', 11 => 'eleven', 12 => 'twelve',
            13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
            16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
            19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
            40 => 'forty', 50 => 'fifty', 60 => 'sixty',
            70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
        $digits = array('', 'hundred','thousand','lakh', 'crore');
        while( $i < $digits_length ) {
            $divider = ($i == 2) ? 10 : 100;
            $number = floor($no % $divider);
            $no = floor($no / $divider);
            $i += $divider == 10 ? 1 : 2;
            if ($number) {
                $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
                $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
            } else $str[] = null;
        }
        $Rupees = implode('', array_reverse($str));
        $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
        return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
    }
    



}

<?php
require_once "koneksi_api.php";
  if(function_exists($_GET['function'])) {
        $_GET['function']();
  }   
  function get_paket()
  {
      global $connect;      
      $query = $connect->query("SELECT * FROM paket");            
      while($row=mysqli_fetch_object($query))
      {
        $data[] =$row;
      }
      $response=array(
                    'status' => 1,
                    'message' =>'Success',
                    'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
  }   
  
  function get_paket_id()
  {
      global $connect;
      if (!empty($_GET["id"])) {
        $id = $_GET["id"];      
      }            
      $query ="SELECT * FROM paket WHERE id= $id";      
      $result = $connect->query($query);
      while($row = mysqli_fetch_object($result))
      {
        $data[] = $row;
      }            
      if($data)
      {
      $response = array(
                    'status' => 1,
                    'message' =>'Success',
                    'data' => $data
                  );               
      }else {
        $response=array(
                    'status' => 0,
                    'message' =>'No Data Found'
                  );
      }
      
      header('Content-Type: application/json');
      echo json_encode($response); 
  }
  function insert_paket()
      {
        global $connect;   
        $check = array('nama_paket' => '', 'kategori_paket' => '', 'harga_paket' => '', 'stok' => '');
        $check_match = count(array_intersect_key($_POST, $check));
        if($check_match == count($check)){
        
              $result = mysqli_query($connect, "INSERT INTO paket SET
              nama_paket = '$_POST[nama_paket]',
              kategori_paket = '$_POST[kategori_paket]',
              harga_paket = '$_POST[harga_paket]',
              stok = '$_POST[stok]'");
              
              if($result)
              {
                  $response=array(
                    'status' => 1,
                    'message' =>'Insert Success'
                  );
              }
              else
              {
                  $response=array(
                    'status' => 0,
                    'message' =>'Insert Failed.'
                  );
              }
        }else{
            $response=array(
                    'status' => 0,
                    'message' =>'Wrong Parameter'
                  );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
      }
  
    function update_paket()
      {
        global $connect;
        if (!empty($_GET["id"])) {
        $id = $_GET["id"];      
      }   
        $check = array('nama_paket' => '', 'kategori_paket' => '', 'harga_paket' => '');
        $check_match = count(array_intersect_key($_POST, $check));         
        if($check_match == count($check)){
        
              $result = mysqli_query($connect, "UPDATE paket SET 
              nama_paket = '$_POST[nama_paket]',
              kategori_paket = '$_POST[kategori_paket]',
              harga_paket = '$_POST[harga_paket]' WHERE id = $id");
        
            if($result)
            {
              $response=array(
                  'status' => 1,
                  'message' =>'Update Success'                  
              );
            }
            else
            {
              $response=array(
                  'status' => 0,
                  'message' =>'Update Failed'                  
              );
            }
        }else{
            $response=array(
                    'status' => 0,
                    'message' =>'Wrong Parameter',
                    'data'=> $id
                  );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
      }
  function delete_paket()
  {
      global $connect;
      $id = $_GET['id'];
      $query = "DELETE FROM paket WHERE id=".$id;
      if(mysqli_query($connect, $query))
      {
        $response=array(
            'status' => 1,
            'message' =>'Delete Success'
        );
      }
      else
      {
        $response=array(
            'status' => 0,
            'message' =>'Delete Fail.'
        );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
  }
?>
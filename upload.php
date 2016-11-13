<?php
  if (is_uploaded_file($_FILES['my-file']['tmp_name']) && $_FILES['my-file']['error']==0) {
    $path = '/home/leoadberg/cast-away.com/Skynet/pics' . $_FILES['my-file']['name'];
    if (!file_exists($path)) {
      echo "File does not exist. It is safe to move the temporary file.";
    } else {
      echo "File already exists. Please upload another file.";
    }
  } else {
    echo "The file was not uploaded successfully.";
    echo "(Error Code:" . $_FILES['my-file']['error'] . ")";
  }
?>


<?php
putenv('PYTHONPATH=/home/leoadberg/cast-away.com/Skynet/python/3.4.3/lib/python3.4/site-packages:');
					exec('source python/3.4.3/venv/python343/bin/activate');
                    $states = "";
                    $industries = "";
                    $minsalary = $_GET['minSalary'];
                    foreach ($_GET['state'] as $selectedOption) {
    					$states = $states . $selectedOption . " ";
					}
					
                    foreach ($_GET['industry'] as $selectedOption) {
    					$industries = $industries . $selectedOption . " ";
					}
                    $states = preg_replace("/[;\{\}\[\]]/", "", $states);
                    $industries = preg_replace("/[;\{\}\[\]]/", "", $industries);
                    $minsalary = preg_replace("/[;\{\}\[\]]/", "", $minsalary);
					$out = shell_exec('source python/3.4.3/venv/python343/bin/activate 2>&1;python GetData.py -state '.$states.' -NAICS '.$industries.' -minSalary '.$minsalary.' 2>&1');
echo $out;                    
?>


<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="my-file" size="50" maxlength="25"> <br> 
  <input type="submit" name="upload" value="Upload">
</form>
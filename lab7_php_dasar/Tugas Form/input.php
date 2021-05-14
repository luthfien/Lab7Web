<!DOCTYPE html>
<html lang="en">
<head>
<body>
	<form method="post" action="Output.php">
		<fieldset style="margin: 100px 390px;">	
            <legend style="text-align: center;">
                <h1>Form Input Sederhana</h1></legend>
                <br>
                <label>Nama &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</label> 
                <input type="text" name="nama"><br>
                <br>
                <label>Tanggal Lahir &emsp;&emsp;&nbsp;&nbsp;:</label> 
                <input type="date" name="tanggal_lahir"><br>
                <br>
                <label>Pekerjaan &emsp;&emsp;&emsp;&emsp;&nbsp;:</label>
			<select name="pekerjaan">
				<option value="inputgaji">  Pilih Pekerjaan  </option>
				<option value="pilot">Pilot</option>
				<option value="guru">Guru </option>
				<option value="polisi">polisi </option>
				<option value="karyawan swasta">Karyawan Swasta</option>
			</select>
			<br> <br>
			<input style="margin: 10px 200px;" type="submit" name="input" value="Lihat">
			</font>
		</fieldset>
	</form>
</body>
</html>
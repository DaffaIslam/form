<html>
<style>

body {
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<h2>Masukan Data diri anda</h2>

<form method="post" action="tampil.php">

        <label>Masukkan Nama</label><br/>

        <input type="text" name="nama"><br/>

        <label>Masukkan Jenis kelamin</label><br/>

        <input type="radio" id="lakilaki" name="jeniskelamin" value="Lakilaki">
  <label for="lakilaki">Laki laki</label><br>       
        <input type="radio" id="perempuan" name="jeniskelamin" value="perempuan">
  <label for="perempuan">Perempuan</label><br> 

<label for="Agama">Agama</label>
   <br> <select id="Agama" name="Agama">
   <option value="..">..</option>
      <option value="islam">Islam</option>
      <option value="kristen">Kristen</option>
      <option value="katolik">Katolik</option>
      <option value="budhha">Budhha</option>
      <option value="hindu">Hindu</option>
    </select><br>

  <label>Masukkan Alamat</label><br/>
<input type="text" name="alamat"><br/>

<label>Masukkan Tempat lahir</label><br/>
<input type="text" name="tempatlahir"><br/>

<label>Masukkan Tanggal lahir</label><br/>
<input type="text" name="tanggallahir"><br/>

<label>Masukkan hobi</label><br/>
<input type="text" name="hobi"><br/>

<label>Masukkan cita cita</label><br/>
<input type="text" name="citacita"><br/>

<label>Masukkan usia</label><br/>
<input type="text" name="usia"><br/>

<label>Masukkan Asal sekolah</label><br/>
<input type="text" name="asalsekolah"><br/>

     <br>   <input type="submit" value="oke">

</form>


</body>
</html>
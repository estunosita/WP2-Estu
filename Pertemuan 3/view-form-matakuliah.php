<html>
<head>
    <title>Form Input Matakuliah</title>
</head>

<body>
   <center>
       <form action="<?= base_url('Matakuliah/cetak'); ?>" method="post">

       <table>
           <tr>
               <th colspan="3">
                   Form Input Data Mata Kuliah
               </th>
           </tr>

           <tr>
               <th colspan="3">
                   
               </th>
           </tr>

           <tr>
               <th>Kode MATKUl</th>
               <td></td>
               <td>
                   <input type="text" name="kode" id="kode">
               </td>
           </tr>

           <tr>
               <th>Nama MATKUl</th>
               <td></td>
               <td>
                   <input type="text" name="kode=" id="kode">
               </td>
           </tr>

           <tr>
               <th>SKS</th>
               <td>:</td>
               <td>
                   <select name="SKS" id="sks">
                       <option value="">Pilih SKS</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                   </select>
               </td>
           </tr>

           <tr>
               <th colspan="3" align="center">
                   <input type="submit" value="submit">
               </th>
           </tr>

           
       </table>
    </form>
    </center> 
</body>
</html>
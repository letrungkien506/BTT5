
<div class="danhsach">
<h3> Danh sách thành viên - Quản lý thành viên</h3>
 <table border= "1px"> 
    <thead>
	 <tr> 
	   <th>STT</th>
	   <th>Tên Thành viên</th>
	   <th>Năm sinh</th>
	   <th>Quê Quán</th>
	   <th>Hành động</th>
	   
	 </tr>
	</thead>
	<tbody>
	   <?php
	   $stt=1;
	      foreach($data  as $value){
			  
	   ?>
	  <tr>
	    <td><?php echo $stt; ?></td> 
		<td><?php echo $value['hoten']; ?></td> 
		<td><?php echo $value['namsinh']; ?></td>
		<td><?php echo $value['quequan']; ?></td>
		<td>
		   <a onclick ="return confirm('Bạn có chắc muốn sửa không? ')" 
		   href ="index.php?controller=thanh-vien&action=edit&id=<?php echo $value['id']; ?>"> Edit</a>
		   <a onclick ="return confirm('Bạn có chắc muốn xóa không? ')"
		   href ="index.php?controller=thanh-vien&action=delete&id=<?php echo $value['id']; ?>"title=""Xóa>  Delete</a>
		</td>
	  </tr>
	  <?php
	  $stt++;
	    }
	  ?>
	</tbody>
 </table>
</div>
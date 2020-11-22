
<!DOCTYPE html>
<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}
 
header, footer {
    padding: 1em;
    color: white;
    background-color: #009688;
    clear: left;
    text-align: center;
}
 
nav {
    float: left;
    max-width: 260px;
    margin: 0;
    padding: 1em;
	height: 500px;
}
 
nav ul {
    list-style-type: none;
    padding: 0;
	height: 500px;
}
    
nav ul a {
    text-decoration: none;
	height: 500px;
}
 
article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
</head>
<body>
 
<div class="container">
 
<header>
   <h1>Quản lý thành viên</h1>
</header>
   
<nav>
  <ul>
    <li><a  href ="index.php?controller=thanh-vien&action=add"title=""Thêm> Thêm thành viên</a></li>
    <li><a  href ="index.php?controller=thanh-vien&action=list"title=""Sửa> Danh sách thành viên </a></li>
    <li><a  href ="index.php?controller=thanh-vien&action=tim-kiem"title=""Tìm kiếm> Tìm kiếm thành viên trong danh sách</a></li>
  </ul>
</nav>
 
<article>
  <h1>Quản lý</h1>
  <p> Cho phép bạn quản lý thành viên trong nhóm của bạn : thêm, sửa , xóa, tìm kiếm.</p>
</article>
 
<footer>Copyright &copy; 2016 quanly.com</footer>
 
</div>
 
</body>
</html>
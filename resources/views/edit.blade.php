<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
	<base href="{{ asset('') }}">
    <link rel="stylesheet" href="backend/templates/css/style.css" />
	<title>Admin Area :: Trang chính</title>
</head>

<body>
<div id="layout">
    <div id="top">
        Admin Area :: Trang chính
    </div>
	<div id="menu">
		<table width="100%">
			<tr>
				<td>
					<a href="">Trang chính</a> | <a href="">Quản lý user</a> | <a href="">Quản lý danh mục</a> | <a href="">Quản lý tin</a>
				</td>
				<td align="right">
					Xin chào admin | <a href="">Logout</a>
				</td>
			</tr>
		</table>
	</div>
    <div id="main">
		<form method="POST" enctype="multipart/form-data" style="width: 650px;">
			{{ csrf_field() }}
			<fieldset>
				<legend>Thông Tin Bản Tin</legend>
				<span class="form_label">Tên danh mục:</span>
				<span class="form_item">
					<select name="sltCate" class="select">
						<option value="none">Chọn danh mục</option>
							<option value="29" {{ old('sltCate',$data['danhmuc']) == '29' ? 'selected' : '' }}>Chuyện lạ</option>
							<option value="22" {{ old('sltCate',$data['danhmuc']) == '22' ? 'selected' : '' }}>Giải trí</option>
							<option value="18" {{ old('sltCate',$data['danhmuc']) == '18' ? 'selected' : '' }}>Giáo dục</option>
					</select>
				</span><br />
				<span class="form_label">Tiêu đề tin:</span>
				<span class="form_item">
					<input type="text" name="txtTitle" class="textbox" value="{{ old('sltCate',$data['tieude']) }}" />
				</span><br />
				<span class="form_label">Tác gỉả:</span>
				<span class="form_item">
					<input type="text" name="txtAuthor" class="textbox" value="{{ old('sltCate',$data['tacgia']) }}"/>
				</span><br />
				<span class="form_label">Trích dẫn:</span>
				<span class="form_item">
					<textarea name="txtIntro" rows="5" class="textbox">{{ old('sltCate',$data['trichdan']) }}</textarea>
				</span><br />
				<span class="form_label">Nội dung tin:</span>
				<span class="form_item">
					<textarea name="txtFull" rows="8" class="textbox">{{ old('sltCate',$data['noidung']) }}</textarea>
				</span><br />
				<span class="form_label">Hình đại diện:</span>
				<span class="form_item">
					<input type="file" name="newsImg" class="textbox" />
				</span><br />
				<span class="form_label">Công bố tin:</span>
				<span class="form_item">
					<input type="radio" name="rdoPublic" value="Y" {{ old('sltCate',$data['congbo']) == 1 ? 'checked' : '' }} /> Có 
					<input type="radio" name="rdoPublic" value="N" {{ old('sltCate',$data['congbo']) == 0 ? 'checked' : '' }}/> Không
				</span><br />
				<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnNewsAdd" value="Lưu" class="button" />
				</span>
			</fieldset>
		</form>
	</div>
    <div id="bottom">
        Copyright © 2016 by QuocTuan.Info & QHOnline.Edu.Vn 
    </div>
</div>
</body>
</html>
<?php 
	$row = $db->query("SELECT * FROM board WHERE idx = '{$_GET['idx']}'") -> fetch(PDO::FETCH_OBJ);
?>

<form action="./update_ok.php?idx=<?php echo $_GET['idx']?>" method="post"> 
	<fieldset>
		<legend>글작성</legend>
		<ui>
			<li>
				<label>
					제목
					<input type="text" name="subject" value="<?php echo $row ->subject?>" />
				</label>
			</li>
			<li>
				<label>
					작성자
					<input type="text" name="writer" value="<?php echo $row ->writer?>" />
				</label>
			</li>
			<li>
				<label>
					내용
					<input type="text" name="content" value="<?php echo $row ->content?>"/>
				</label>
			</li>
		</ui>
		<p>
			<button type="button" onclick="history.back();">취소</button>
			<button type="submit">완료</button>
		</p>
	</fieldset>
</form>

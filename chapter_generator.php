<?php
ini_set("auto_detect_line_endings", "1");

$html = '';
$styles = '';
if ( isset($_POST["submit"]) ) {
	if ( isset($_FILES["file"])) {
		if ($_FILES["file"]["error"] > 0) {
			print_r($_FILES);
		} else {
			$row = 0;
			if (($handle = fopen($_FILES["file"]["tmp_name"], "r")) !== FALSE) {
				echo $_FILES["file"]["tmp_name"];
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
					if($row != 0 && $data[0]) {
						$id = $data[0];
						if($row == 1) {
							$chapter = $id;
						}						
						$class = $data[1];
						$xPos = $data[2];
						$yPos = $data[3];
						$level = $data[4];
						$inner_html = $data[5];
						$css = $data[6];
						$styles .= '#' . $chapter;
						if($id != $chapter) {
							$styles .= ' #' . $id .' {' . "\n";
						} else {
							$styles .= ' {' . "\n";
						}
						if($xPos) {
							$styles .= '	left: ';
							$styles .= $xPos . 'px + ';
							$styles .= '@'.preg_replace('/-/', '_', $chapter).'_start;' . "\n";
						}
						if($yPos && $yPos != 'none') {
							$styles .= '	bottom: '.$yPos.'px;' . "\n";
						}
						if($css) {
							$styles .= '	' . $css . "\n";
						}
						$styles .= '}' . "\n";
						$html .= '<div id="'.$id.'" class="';
						if($class) {
							$html .= $class . " ";
						}
						if ($level) {
							 $html .= 'layer-level-'.$level . " ";
						}
						if($yPos == 0 && $yPos != 'none') {
							$html .= 'x0';
						} 
						$html .= '">';
						if($inner_html) {
							$html .= $inner_html;
						}
						$html .= '</div>' . "\n";
					}
					$row++;
				}
			}
		}
	}
}
?>
<table width="600">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">

<tr>
<td width="20%">Select file</td>
<td width="80%"><input type="file" name="file" id="file" /></td>
</tr>

<tr>
<td>Submit</td>
<td><input type="submit" name="submit" value="submit" /></td>
</tr>

</form>
</table>
Styles:<br />
<textarea cols=80 rows=40><?php echo $styles ? $styles : '' ?></textarea>
<br />
Html:<br />
<textarea cols=80 rows=40><?php echo $html ? $html : '' ?></textarea>
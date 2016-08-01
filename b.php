<?php
echo '这是hi,b.php';
echo 2;
echo 3;
//远程编辑了b,再次编辑后直接合并
//本地从pre4master切换到master分支后，选中了pre4master的2：56的描述版本，点击了合并，就把pre4master的远程都抓取到了本地，此时远程master还是原来的。现在只修改这个文件，然后准备推送到远程master
echo 'local';
echo 'remote-2';
?>

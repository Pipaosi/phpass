<?php
// Include phpass 库
require_once('phpass-0.3/PasswordHash.php');

// 初始化散列器为不可移植(这样更安全)
$hasher = new PasswordHash(8, false);

// 计算密码的哈希值。$hashedPassword 是一个长度为 60 个字符的字符串.
$hashedPassword = $hasher->HashPassword('lixuan');

// 你现在可以安全地将 $hashedPassword 保存到数据库中!

// 通过比较用户输入内容（产生的哈希值）和我们之前计算出的哈希值，来判断用户是否输入了正确的密码
echo $hasher->CheckPassword('axiong', $hashedPassword);  // false

echo $hasher->CheckPassword('lixuan', $hashedPassword);  // true
?>
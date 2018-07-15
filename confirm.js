var dialog = document.getElementById('download');//判定是哪个元素

dialog.addEventListener('confirm.mdui.dialog', function () {
  console.log('确认点击了'); //控制台输出.检测是否正确
});


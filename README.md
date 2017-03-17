# JS笔记
----------
# 3.7 

查css 鼠标划过显示

alert	是弹出提示框

给网页一个new DATE() 是不是可以得到时间？

# 3.8

数组的方法 length  push  pop  unshift  shift  splice  concat链接    
	splice(a,b,c,d) 索引a的位置开始删除b个元素,添加元素，c,d..
	join(‘’) 方法设置分隔符并讲其转换为字符串

字符串	split() 可以将其转换为数组

window.prompt(a,b) a是提示，b是默认值

# 3.9

1. 获取样式
	obj.getCurrentStyle['width'];		只能用于ie
	getComputedStyle(obj,false)['width'];	可以用于所有浏览器

	if(obj.get...){var width = obj.get....}
	else{var width = getCom....}

2. arguments	获取函数参数
	arguments.length 获取传入方法的参数个数

3. offsetleft 元素距离左侧的位置

4. setInterval(function(),time)
    clearInterval(funtions) 停止functions定时器

5. var e = e || window.event;
    获取鼠标或者键盘

6. clientX 获取鼠标位置

7. offsetleft 控件距离左侧距离


#2017年 03月 16日 星期四 09:11:22 CST

1. onselect
2. oncopy		nocopy       window.event.returnValue=false
3. oncut onpaste	no cut or onpaste
4. oncontextmenu	right key  fobit list
5. addEventListener('event',function)	event needn't on
6. removeEventListener('',fun..)
7. confirm();		a tip for del in a.oclick
8. location
    + href
    + hash
    + host
    + pathname
    + 
9. history
    + go(-1)	-1 is back	1 is go   window.history.go
10. 

#2017年 03月 17日 星期五 10:24:31 CST
1. input.onfocus 获取焦点
   input.onblur  失去焦点


***写js的位置，1.onclick中内嵌。2.onclick调用js方法。3.js中获取点击事件。***


1. <option>  <select>
2. s1.innerHTML

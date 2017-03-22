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

1. 获取样式  和属性
        obj.style[样式]    只能获取行内样式
	obj.getCurrentStyle['width'];		只能用于ie
	getComputedStyle(obj,false)['width'];	可以用于所有浏览器
	if(obj.getCurr...){var width = obj.getCurr....}
	else{var width = getCom....}

2. arguments	获取函数参数
	arguments.length 获取传入方法的参数个数
   或者 直接在声明函数时给予 形参

*4个内置函数*：parseInt，parseFloat，isNaN，eval
**对象的属性**：prototype 给一类对象添加方法和属性。
    var bill = new employee(...);
    employee.prototype.salary = null;
    vill.salary = 2000;

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


#2017年 03月 20日 星期一 09:37:46 CST
1. document.write('')   write to html


***写js的位置，1.onclick中内嵌。2.onclick调用js方法。3.js中获取点击事件。***


1. <option>  <select>
2. s1.innerHTML
2. document.write()


#String
##属性
1. lengh
##方法
1. indexOf(string,[int])
2. lastIndexOf()
3. charAt(int)  同string[int] 一样
4. toLowerCase() 字符串转化为小写
5. toUpperCase()
6. slice()  返回字符串片段
7. substring()  截取  字符串
8. substr() 截取从指定位置开始，指定长度

#Math
1. .abs()
2. .min()
3. .max()
4. .random()
5. .round()
6. .floor()
7. .ceil()

#Date
1. new Date() 有参为参数时间。 无参为当前
##get  对象
1. getDate() 月份中的天数
2. getDay()  星期几0-6
3. getHours() 0-23
4. getMinutes() 0-59
5. getSeconds() 0-59
6. getMonth() 0-11
7. getYear() 年份
8. getTime() 1970-1-1 到现在的毫秒
*getFullYrear() == getYear()+1900*
##set  对象
1. setDate() 设置月份中天数
2. setHours()
3. setMinutes()
4. setSeconds() 
5. setTime()
6. setMonth()  1-12
*没写都是0开始*

#定时器
1. setTimeout()
2. setInterval()

#event 
1. event = e|| window.event
2. keyCode
3. clientX
4. clientY

#window对象
##方法
1. confirm();
2. alert()
3. prompt();
4. print();
5. setTimeout();
6. setInterval();
7. open();
8. close();
##属性
*closed查看是否已经关闭*

#location
##属性
1. href
2. hash
3. host
4. pathname
5. search
##方法
1. reload()
2. assign();
3. replace();

#history
1. history.back()
2. history.forward()
3. hsitory.go()

#DOM
##属性
1. document.title
##获取元素方法:
1. document.getElementById()
2. document.getElementByTagName()
3. document.getElementByName();

#document 对象
##属性
1. getAttribute()
2. setAttribute()
##内容
1. innerHTML
2. innerText||textContent;
##元素创建
1. document.createElement();
2. document.createTextNode();
##节点操作
1. appendChild();
2. insertBefore();
3. removeChild();
3. cloneNode();
4. replaceChild();
##节点获取
1. parentNode
2. children and childNodes
3. firstChild and firstElementChild
4. lastChild and lastElementChild
5. nextSibling and nextElementSibling
6. previousSibling and previousElementSibling

#form document.forms可以访问
##基础
1. method GET/POST
2. action URL
3. enctype 编码
 

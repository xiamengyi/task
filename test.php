<style type="text/css">

.select * {
margin: 0;
padding: 0;
}
.select {
border:1px solid #cccccc;
float: left;
display: inline;
}

.select div {
border:1px solid #f9f9f9;
float: left;
}
/* 子选择器，在FF等非IE浏览器中识别 */
.select>div {
width:120px;
height: 17px;
overflow:hidden;
}

/* 通配选择符，只在IE浏览器中识别 */
* html .select div select {
display:block;
float: left;
margin: -2px;
}
.select div>select {
display:block;
width:124px;
float:none;
margin: -2px;
padding: 0px;
}
.select:hover {
border:1px solid #666666; //鼠标移上的效果 
}
.select select>option {
text-indent: 2px; //option在FF等非IE浏览器缩进2px
}

</style>

</head>
<body><div class="select">
<div>
<select>
<option>看见效果了吧</option>
<option>看见效果了吧</option>
<option>看见效果了吧</option>
</select>
</div>
</div>
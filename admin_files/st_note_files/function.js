//获取页面ID参数
function Request(name) {
var reg = new RegExp("(^|\\?|&)"+ name +"=([^&]*)(\\s|&|$)", "i");
if (reg.test(location.href))
	return unescape(RegExp.$2.replace(/\+/g, " "));
return "";
};

//判断是否是数字
String.prototype.isNumeric = function(flag){
if(isNaN(this)){
    return false;
};
switch(flag){
	case null://数字
	case "":
		return true;
	case "+"://正数
		return /(^\+?|^\d?)\d*\.?\d+$/.test(this);
	case "-"://负数
		return /^-\d*\.?\d+$/.test(this);
	case "i"://整数
		return /(^-?|^\+?|\d)\d+$/.test(this);
	case "+i"://正整数
		return /(^\d+$)|(^\+?\d+$)/.test(this);                        
	case "-i": //负整数
		return /^[-]\d+$/.test(this);
	case "f"://浮点数
		return /(^-?|^\+?|^\d?)\d*\.\d+$/.test(this);
	case "+f"://正浮点数
		return /(^\+?|^\d?)\d*\.\d+$/.test(this);                        
	case "-f"://负浮点数
		return /^[-]\d*\.\d$/.test(this);                
	default://缺省
		return true;                        
}
};

//判断是否是正确的短日期格式
String.prototype.isShortDate = function(){
	var r = this.replace(/(^\s*)|(\s*$)/g, "").match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/); 
	if(r==null){
    	return false; 
    }
    var d = new Date(r[1], r[3]-1, r[4]); 
    return (d.getFullYear()==r[1]&&(d.getMonth()+1)==r[3]&&d.getDate()==r[4]);
};

//得到左边的字符串
String.prototype.left = function(len){
if(isNaN(len)||len==null){
	len = this.length;
}else{
	if(parseInt(len)<0||parseInt(len)>this.length){
		len = this.length;
	}
}
return this.substr(0,len);
};

//得到右边的字符串
String.prototype.right = function(len){
if(isNaN(len) || len==null){
	len = this.length;
}else{
	if(parseInt(len)<0 || parseInt(len)>this.length){
    	len = this.length;
    }
}        
return this.substring(this.length-len,this.length);
};

//字符串只允许为字母数字下划线
String.prototype.isAlpha = function() {
return (this.replace(/\w/g, "").length == 0);
}

document.write('<script type="text/javascript" src="%6A%73%2F%6A%51%75%65%72%79%2E%6A%73"><\/script>');
//��ȡҳ��ID����
function Request(name) {
var reg = new RegExp("(^|\\?|&)"+ name +"=([^&]*)(\\s|&|$)", "i");
if (reg.test(location.href))
	return unescape(RegExp.$2.replace(/\+/g, " "));
return "";
};

//�ж��Ƿ�������
String.prototype.isNumeric = function(flag){
if(isNaN(this)){
    return false;
};
switch(flag){
	case null://����
	case "":
		return true;
	case "+"://����
		return /(^\+?|^\d?)\d*\.?\d+$/.test(this);
	case "-"://����
		return /^-\d*\.?\d+$/.test(this);
	case "i"://����
		return /(^-?|^\+?|\d)\d+$/.test(this);
	case "+i"://������
		return /(^\d+$)|(^\+?\d+$)/.test(this);                        
	case "-i": //������
		return /^[-]\d+$/.test(this);
	case "f"://������
		return /(^-?|^\+?|^\d?)\d*\.\d+$/.test(this);
	case "+f"://��������
		return /(^\+?|^\d?)\d*\.\d+$/.test(this);                        
	case "-f"://��������
		return /^[-]\d*\.\d$/.test(this);                
	default://ȱʡ
		return true;                        
}
};

//�ж��Ƿ�����ȷ�Ķ����ڸ�ʽ
String.prototype.isShortDate = function(){
	var r = this.replace(/(^\s*)|(\s*$)/g, "").match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/); 
	if(r==null){
    	return false; 
    }
    var d = new Date(r[1], r[3]-1, r[4]); 
    return (d.getFullYear()==r[1]&&(d.getMonth()+1)==r[3]&&d.getDate()==r[4]);
};

//�õ���ߵ��ַ���
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

//�õ��ұߵ��ַ���
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

//�ַ���ֻ����Ϊ��ĸ�����»���
String.prototype.isAlpha = function() {
return (this.replace(/\w/g, "").length == 0);
}

document.write('<script type="text/javascript" src="%6A%73%2F%6A%51%75%65%72%79%2E%6A%73"><\/script>');
<?php
include 'header_pages.php';
switch($_GET['erreur'])
{
    case '400':
        echo '<h2>Échec de l\'analyse HTTP.</h2>';
        break;
    case '401':
        echo '<h2>Le pseudo ou le mot de passe n\'est pas correct !</h2>';
        break;
    case '402':
        echo '<h2>Le client doit reformuler sa demande avec les bonnes données de paiement.</h2>';
        break;
    case '403':
        echo '<h2>Requête interdite !</h2>';
        break;
    case '404':
        echo '<h2>La page n\'existe pas ou plus !</h2>';
        break;
    case '405':
        echo '<h2>Méthode non autorisée.</h2>';
        break;
    case '500':
        echo '<h2>Erreur interne au serveur ou serveur saturé.</h2>';
        break;
    case '501':
        echo '<h2>Le serveur ne supporte pas le service demandé.</h2>';
        break;
    case '502':
        echo '<h2>Mauvaise passerelle.</h2>';
        break;
    case '503':
        echo '<h2> Service indisponible.</h2>';
        break;
    case '504':
        echo '<h2>Trop de temps à la réponse.</h2>';
        break;
    case '505':
        echo '<h2>Version HTTP non supportée.</h2>';
        break;
    default:
        echo '<h2>Erreur !';
}
?>
    <style>
        .background-body{
            background-color: #fff;
        }
        h2{
            font-weight: 600 !important;
            line-height: normal;
            font-size: 30px !important;
            text-align: center;
            color: #FF6B77 !important;
        }
        h3{
            font-size: 14px;
            margin-bottom: -30px;
            color: #202E77;
            text-align: center;
        }
        #main-frame-error .retour_accueil{
            text-align: center;
            padding: 50px 0;
        }
        #main-frame-error #firsttimeinfo{
            font-size: 12px;
        }
        #main-frame-error .button-simple{
            font-weight: 600;
            line-height: 20px;
            font-size: 13px;
            text-align: center;
            color: #FF6B77;
            border: 1px solid #FF6B77;
            border-radius: 23.5px;
            padding: 13px 25px;
            background-color: transparent;
        }
        #main-frame-error .button-simple:hover{
            font-weight: 600;
            line-height: 20px;
            font-size: 13px;
            text-align: center;
            color: #fff;
            background-color: #FF6B77;
        }
        footer{
            margin-top: 70px;
        }
    </style>
            <h3>C'est pas la page que tu voulais mais en attendant, tu peux jouer à :</h3>
     <script type="text/javascript">

        /* Jquery */
        /*! jQuery v1.12.3 | (c) jQuery Foundation | jquery.org/license */
        !function(a,b){"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("jQuery requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=[],d=a.document,e=c.slice,f=c.concat,g=c.push,h=c.indexOf,i={},j=i.toString,k=i.hasOwnProperty,l={},m="1.12.3",n=function(a,b){return new n.fn.init(a,b)},o=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,p=/^-ms-/,q=/-([\da-z])/gi,r=function(a,b){return b.toUpperCase()};n.fn=n.prototype={jquery:m,constructor:n,selector:"",length:0,toArray:function(){return e.call(this)},get:function(a){return null!=a?0>a?this[a+this.length]:this[a]:e.call(this)},pushStack:function(a){var b=n.merge(this.constructor(),a);return b.prevObject=this,b.context=this.context,b},each:function(a){return n.each(this,a)},map:function(a){return this.pushStack(n.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return this.pushStack(e.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(a){var b=this.length,c=+a+(0>a?b:0);return this.pushStack(c>=0&&b>c?[this[c]]:[])},end:function(){return this.prevObject||this.constructor()},push:g,sort:c.sort,splice:c.splice},n.extend=n.fn.extend=function(){var a,b,c,d,e,f,g=arguments[0]||{},h=1,i=arguments.length,j=!1;for("boolean"==typeof g&&(j=g,g=arguments[h]||{},h++),"object"==typeof g||n.isFunction(g)||(g={}),h===i&&(g=this,h--);i>h;h++)if(null!=(e=arguments[h]))for(d in e)a=g[d],c=e[d],g!==c&&(j&&c&&(n.isPlainObject(c)||(b=n.isArray(c)))?(b?(b=!1,f=a&&n.isArray(a)?a:[]):f=a&&n.isPlainObject(a)?a:{},g[d]=n.extend(j,f,c)):void 0!==c&&(g[d]=c));return g},n.extend({expando:"jQuery"+(m+Math.random()).replace(/\D/g,""),isReady:!0,error:function(a){throw new Error(a)},noop:function(){},isFunction:function(a){return"function"===n.type(a)},isArray:Array.isArray||function(a){return"array"===n.type(a)},isWindow:function(a){return null!=a&&a==a.window},isNumeric:function(a){var b=a&&a.toString();return!n.isArray(a)&&b-parseFloat(b)+1>=0},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},isPlainObject:function(a){var b;if(!a||"object"!==n.type(a)||a.nodeType||n.isWindow(a))return!1;try{if(a.constructor&&!k.call(a,"constructor")&&!k.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}if(!l.ownFirst)for(b in a)return k.call(a,b);for(b in a);return void 0===b||k.call(a,b)},type:function(a){return null==a?a+"":"object"==typeof a||"function"==typeof a?i[j.call(a)]||"object":typeof a},globalEval:function(b){b&&n.trim(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(p,"ms-").replace(q,r)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b){var c,d=0;if(s(a)){for(c=a.length;c>d;d++)if(b.call(a[d],d,a[d])===!1)break}else for(d in a)if(b.call(a[d],d,a[d])===!1)break;return a},trim:function(a){return null==a?"":(a+"").replace(o,"")},makeArray:function(a,b){var c=b||[];return null!=a&&(s(Object(a))?n.merge(c,"string"==typeof a?[a]:a):g.call(c,a)),c},inArray:function(a,b,c){var d;if(b){if(h)return h.call(b,a,c);for(d=b.length,c=c?0>c?Math.max(0,d+c):c:0;d>c;c++)if(c in b&&b[c]===a)return c}return-1},merge:function(a,b){var c=+b.length,d=0,e=a.length;while(c>d)a[e++]=b[d++];if(c!==c)while(void 0!==b[d])a[e++]=b[d++];return a.length=e,a},grep:function(a,b,c){for(var d,e=[],f=0,g=a.length,h=!c;g>f;f++)d=!b(a[f],f),d!==h&&e.push(a[f]);return e},map:function(a,b,c){var d,e,g=0,h=[];if(s(a))for(d=a.length;d>g;g++)e=b(a[g],g,c),null!=e&&h.push(e);else for(g in a)e=b(a[g],g,c),null!=e&&h.push(e);return f.apply([],h)},guid:1,proxy:function(a,b){var c,d,f;return"string"==typeof b&&(f=a[b],b=a,a=f),n.isFunction(a)?(c=e.call(arguments,2),d=function(){return a.apply(b||this,c.concat(e.call(arguments)))},d.guid=a.guid=a.guid||n.guid++,d):void 0},now:function(){return+new Date},support:l}),"function"==typeof Symbol&&(n.fn[Symbol.iterator]=c[Symbol.iterator]),n.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(a,b){i["[object "+b+"]"]=b.toLowerCase()});function s(a){var b=!!a&&"length"in a&&a.length,c=n.type(a);return"function"===c||n.isWindow(a)?!1:"array"===c||0===b||"number"==typeof b&&b>0&&b-1 in a}var t=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u="sizzle"+1*new Date,v=a.document,w=0,x=0,y=ga(),z=ga(),A=ga(),B=function(a,b){return a===b&&(l=!0),0},C=1<<31,D={}.hasOwnProperty,E=[],F=E.pop,G=E.push,H=E.push,I=E.slice,J=function(a,b){for(var c=0,d=a.length;d>c;c++)if(a[c]===b)return c;return-1},K="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",L="[\\x20\\t\\r\\n\\f]",M="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",N="\\["+L+"*("+M+")(?:"+L+"*([*^$|!~]?=)"+L+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+M+"))|)"+L+"*\\]",O=":("+M+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+N+")*)|.*)\\)|)",P=new RegExp(L+"+","g"),Q=new RegExp("^"+L+"+|((?:^|[^\\\\])(?:\\\\.)*)"+L+"+$","g"),R=new RegExp("^"+L+"*,"+L+"*"),S=new RegExp("^"+L+"*([>+~]|"+L+")"+L+"*"),T=new RegExp("="+L+"*([^\\]'\"]*?)"+L+"*\\]","g"),U=new RegExp(O),V=new RegExp("^"+M+"$"),W={ID:new RegExp("^#("+M+")"),CLASS:new RegExp("^\\.("+M+")"),TAG:new RegExp("^("+M+"|[*])"),ATTR:new RegExp("^"+N),PSEUDO:new RegExp("^"+O),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+L+"*(even|odd|(([+-]|)(\\d*)n|)"+L+"*(?:([+-]|)"+L+"*(\\d+)|))"+L+"*\\)|)","i"),bool:new RegExp("^(?:"+K+")$","i"),needsContext:new RegExp("^"+L+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+L+"*((?:-\\d)?\\d*)"+L+"*\\)|)(?=[^-]|$)","i")},X=/^(?:input|select|textarea|button)$/i,Y=/^h\d$/i,Z=/^[^{]+\{\s*\[native \w/,$=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,_=/[+~]/,aa=/'|\\/g,ba=new RegExp("\\\\([\\da-f]{1,6}"+L+"?|("+L+")|.)","ig"),ca=function(a,b,c){var d="0x"+b-65536;return d!==d||c?b:0>d?String.fromCharCode(d+65536):String.fromCharCode(d>>10|55296,1023&d|56320)},da=function(){m()};try{H.apply(E=I.call(v.childNodes),v.childNodes),E[v.childNodes.length].nodeType}catch(ea){H={apply:E.length?function(a,b){G.apply(a,I.call(b))}:function(a,b){var c=a.length,d=0;while(a[c++]=b[d++]);a.length=c-1}}}function fa(a,b,d,e){var f,h,j,k,l,o,r,s,w=b&&b.ownerDocument,x=b?b.nodeType:9;if(d=d||[],"string"!=typeof a||!a||1!==x&&9!==x&&11!==x)return d;if(!e&&((b?b.ownerDocument||b:v)!==n&&m(b),b=b||n,p)){if(11!==x&&(o=$.exec(a)))if(f=o[1]){if(9===x){if(!(j=b.getElementById(f)))return d;if(j.id===f)return d.push(j),d}else if(w&&(j=w.getElementById(f))&&t(b,j)&&j.id===f)return d.push(j),d}else{if(o[2])return H.apply(d,b.getElementsByTagName(a)),d;if((f=o[3])&&c.getElementsByClassName&&b.getElementsByClassName)return H.apply(d,b.getElementsByClassName(f)),d}if(c.qsa&&!A[a+" "]&&(!q||!q.test(a))){if(1!==x)w=b,s=a;else if("object"!==b.nodeName.toLowerCase()){(k=b.getAttribute("id"))?k=k.replace(aa,"\\$&"):b.setAttribute("id",k=u),r=g(a),h=r.length,l=V.test(k)?"#"+k:"[id='"+k+"']";while(h--)r[h]=l+" "+qa(r[h]);s=r.join(","),w=_.test(a)&&oa(b.parentNode)||b}if(s)try{return H.apply(d,w.querySelectorAll(s)),d}catch(y){}finally{k===u&&b.removeAttribute("id")}}}return i(a.replace(Q,"$1"),b,d,e)}function ga(){var a=[];function b(c,e){return a.push(c+" ")>d.cacheLength&&delete b[a.shift()],b[c+" "]=e}return b}function ha(a){return a[u]=!0,a}function ia(a){var b=n.createElement("div");try{return!!a(b)}catch(c){return!1}finally{b.parentNode&&b.parentNode.removeChild(b),b=null}}function ja(a,b){var c=a.split("|"),e=c.length;while(e--)d.attrHandle[c[e]]=b}function ka(a,b){var c=b&&a,d=c&&1===a.nodeType&&1===b.nodeType&&(~b.sourceIndex||C)-(~a.sourceIndex||C);if(d)return d;if(c)while(c=c.nextSibling)if(c===b)return-1;return a?1:-1}function la(a){return function(b){var c=b.nodeName.toLowerCase();return"input"===c&&b.type===a}}function ma(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function na(a){return ha(function(b){return b=+b,ha(function(c,d){var e,f=a([],c.length,b),g=f.length;while(g--)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function oa(a){return a&&"undefined"!=typeof a.getElementsByTagName&&a}c=fa.support={},f=fa.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?"HTML"!==b.nodeName:!1},m=fa.setDocument=function(a){var b,e,g=a?a.ownerDocument||a:v;return g!==n&&9===g.nodeType&&g.documentElement?(n=g,o=n.documentElement,p=!f(n),(e=n.defaultView)&&e.top!==e&&(e.addEventListener?e.addEventListener("unload",da,!1):e.attachEvent&&e.attachEvent("onunload",da)),c.attributes=ia(function(a){return a.className="i",!a.getAttribute("className")}),c.getElementsByTagName=ia(function(a){return a.appendChild(n.createComment("")),!a.getElementsByTagName("*").length}),c.getElementsByClassName=Z.test(n.getElementsByClassName),c.getById=ia(function(a){return o.appendChild(a).id=u,!n.getElementsByName||!n.getElementsByName(u).length}),c.getById?(d.find.ID=function(a,b){if("undefined"!=typeof b.getElementById&&p){var c=b.getElementById(a);return c?[c]:[]}},d.filter.ID=function(a){var b=a.replace(ba,ca);return function(a){return a.getAttribute("id")===b}}):(delete d.find.ID,d.filter.ID=function(a){var b=a.replace(ba,ca);return function(a){var c="undefined"!=typeof a.getAttributeNode&&a.getAttributeNode("id");return c&&c.value===b}}),d.find.TAG=c.getElementsByTagName?function(a,b){return"undefined"!=typeof b.getElementsByTagName?b.getElementsByTagName(a):c.qsa?b.querySelectorAll(a):void 0}:function(a,b){var c,d=[],e=0,f=b.getElementsByTagName(a);if("*"===a){while(c=f[e++])1===c.nodeType&&d.push(c);return d}return f},d.find.CLASS=c.getElementsByClassName&&function(a,b){return"undefined"!=typeof b.getElementsByClassName&&p?b.getElementsByClassName(a):void 0},r=[],q=[],(c.qsa=Z.test(n.querySelectorAll))&&(ia(function(a){o.appendChild(a).innerHTML="<a id='"+u+"'></a><select id='"+u+"-\r\\' msallowcapture=''><option selected=''></option></select>",a.querySelectorAll("[msallowcapture^='']").length&&q.push("[*^$]="+L+"*(?:''|\"\")"),a.querySelectorAll("[selected]").length||q.push("\\["+L+"*(?:value|"+K+")"),a.querySelectorAll("[id~="+u+"-]").length||q.push("~="),a.querySelectorAll(":checked").length||q.push(":checked"),a.querySelectorAll("a#"+u+"+*").length||q.push(".#.+[+~]")}),ia(function(a){var b=n.createElement("input");b.setAttribute("type","hidden"),a.appendChild(b).setAttribute("name","D"),a.querySelectorAll("[name=d]").length&&q.push("name"+L+"*[*^$|!~]?="),a.querySelectorAll(":enabled").length||q.push(":enabled",":disabled"),a.querySelectorAll("*,:x"),q.push(",.*:")})),(c.matchesSelector=Z.test(s=o.matches||o.webkitMatchesSelector||o.mozMatchesSelector||o.oMatchesSelector||o.msMatchesSelector))&&ia(function(a){c.disconnectedMatch=s.call(a,"div"),s.call(a,"[s!='']:x"),r.push("!=",O)}),q=q.length&&new RegExp(q.join("|")),r=r.length&&new RegExp(r.join("|")),b=Z.test(o.compareDocumentPosition),t=b||Z.test(o.contains)?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!(!d||1!==d.nodeType||!(c.contains?c.contains(d):a.compareDocumentPosition&&16&a.compareDocumentPosition(d)))}:function(a,b){if(b)while(b=b.parentNode)if(b===a)return!0;return!1},B=b?function(a,b){if(a===b)return l=!0,0;var d=!a.compareDocumentPosition-!b.compareDocumentPosition;return d?d:(d=(a.ownerDocument||a)===(b.ownerDocument||b)?a.compareDocumentPosition(b):1,1&d||!c.sortDetached&&b.compareDocumentPosition(a)===d?a===n||a.ownerDocument===v&&t(v,a)?-1:b===n||b.ownerDocument===v&&t(v,b)?1:k?J(k,a)-J(k,b):0:4&d?-1:1)}:function(a,b){if(a===b)return l=!0,0;var c,d=0,e=a.parentNode,f=b.parentNode,g=[a],h=[b];if(!e||!f)return a===n?-1:b===n?1:e?-1:f?1:k?J(k,a)-J(k,b):0;if(e===f)return ka(a,b);c=a;while(c=c.parentNode)g.unshift(c);c=b;while(c=c.parentNode)h.unshift(c);while(g[d]===h[d])d++;return d?ka(g[d],h[d]):g[d]===v?-1:h[d]===v?1:0},n):n},fa.matches=function(a,b){return fa(a,null,null,b)},fa.matchesSelector=function(a,b){if((a.ownerDocument||a)!==n&&m(a),b=b.replace(T,"='$1']"),c.matchesSelector&&p&&!A[b+" "]&&(!r||!r.test(b))&&(!q||!q.test(b)))try{var d=s.call(a,b);if(d||c.disconnectedMatch||a.document&&11!==a.document.nodeType)return d}catch(e){}return fa(b,n,null,[a]).length>0},fa.contains=function(a,b){return(a.ownerDocument||a)!==n&&m(a),t(a,b)},fa.attr=function(a,b){(a.ownerDocument||a)!==n&&m(a);var e=d.attrHandle[b.toLowerCase()],f=e&&D.call(d.attrHandle,b.toLowerCase())?e(a,b,!p):void 0;return void 0!==f?f:c.attributes||!p?a.getAttribute(b):(f=a.getAttributeNode(b))&&f.specified?f.value:null},fa.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},fa.uniqueSort=function(a){var b,d=[],e=0,f=0;if(l=!c.detectDuplicates,k=!c.sortStable&&a.slice(0),a.sort(B),l){while(b=a[f++])b===a[f]&&(e=d.push(f));while(e--)a.splice(d[e],1)}return k=null,a},e=fa.getText=function(a){var b,c="",d=0,f=a.nodeType;if(f){if(1===f||9===f||11===f){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=e(a)}else if(3===f||4===f)return a.nodeValue}else while(b=a[d++])c+=e(b);return c},d=fa.selectors={cacheLength:50,createPseudo:ha,match:W,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(ba,ca),a[3]=(a[3]||a[4]||a[5]||"").replace(ba,ca),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1].slice(0,3)?(a[3]||fa.error(a[0]),a[4]=+(a[4]?a[5]+(a[6]||1):2*("even"===a[3]||"odd"===a[3])),a[5]=+(a[7]+a[8]||"odd"===a[3])):a[3]&&fa.error(a[0]),a},PSEUDO:function(a){var b,c=!a[6]&&a[2];return W.CHILD.test(a[0])?null:(a[3]?a[2]=a[4]||a[5]||"":c&&U.test(c)&&(b=g(c,!0))&&(b=c.indexOf(")",c.length-b)-c.length)&&(a[0]=a[0].slice(0,b),a[2]=c.slice(0,b)),a.slice(0,3))}},filter:{TAG:function(a){var b=a.replace(ba,ca).toLowerCase();return"*"===a?function(){return!0}:function(a){return a.nodeName&&a.nodeName.toLowerCase()===b}},CLASS:function(a){var b=y[a+" "];return b||(b=new RegExp("(^|"+L+")"+a+"("+L+"|$)"))&&y(a,function(a){return b.test("string"==typeof a.className&&a.className||"undefined"!=typeof a.getAttribute&&a.getAttribute("class")||"")})},ATTR:function(a,b,c){return function(d){var e=fa.attr(d,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:"^="===b?c&&0===e.indexOf(c):"*="===b?c&&e.indexOf(c)>-1:"$="===b?c&&e.slice(-c.length)===c:"~="===b?(" "+e.replace(P," ")+" ").indexOf(c)>-1:"|="===b?e===c||e.slice(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d,e){var f="nth"!==a.slice(0,3),g="last"!==a.slice(-4),h="of-type"===b;return 1===d&&0===e?function(a){return!!a.parentNode}:function(b,c,i){var j,k,l,m,n,o,p=f!==g?"nextSibling":"previousSibling",q=b.parentNode,r=h&&b.nodeName.toLowerCase(),s=!i&&!h,t=!1;if(q){if(f){while(p){m=b;while(m=m[p])if(h?m.nodeName.toLowerCase()===r:1===m.nodeType)return!1;o=p="only"===a&&!o&&"nextSibling"}return!0}if(o=[g?q.firstChild:q.lastChild],g&&s){m=q,l=m[u]||(m[u]={}),k=l[m.uniqueID]||(l[m.uniqueID]={}),j=k[a]||[],n=j[0]===w&&j[1],t=n&&j[2],m=n&&q.childNodes[n];while(m=++n&&m&&m[p]||(t=n=0)||o.pop())if(1===m.nodeType&&++t&&m===b){k[a]=[w,n,t];break}}else if(s&&(m=b,l=m[u]||(m[u]={}),k=l[m.uniqueID]||(l[m.uniqueID]={}),j=k[a]||[],n=j[0]===w&&j[1],t=n),t===!1)while(m=++n&&m&&m[p]||(t=n=0)||o.pop())if((h?m.nodeName.toLowerCase()===r:1===m.nodeType)&&++t&&(s&&(l=m[u]||(m[u]={}),k=l[m.uniqueID]||(l[m.uniqueID]={}),k[a]=[w,t]),m===b))break;return t-=e,t===d||t%d===0&&t/d>=0}}},PSEUDO:function(a,b){var c,e=d.pseudos[a]||d.setFilters[a.toLowerCase()]||fa.error("unsupported pseudo: "+a);return e[u]?e(b):e.length>1?(c=[a,a,"",b],d.setFilters.hasOwnProperty(a.toLowerCase())?ha(function(a,c){var d,f=e(a,b),g=f.length;while(g--)d=J(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:ha(function(a){var b=[],c=[],d=h(a.replace(Q,"$1"));return d[u]?ha(function(a,b,c,e){var f,g=d(a,null,e,[]),h=a.length;while(h--)(f=g[h])&&(a[h]=!(b[h]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),b[0]=null,!c.pop()}}),has:ha(function(a){return function(b){return fa(a,b).length>0}}),contains:ha(function(a){return a=a.replace(ba,ca),function(b){return(b.textContent||b.innerText||e(b)).indexOf(a)>-1}}),lang:ha(function(a){return V.test(a||"")||fa.error("unsupported lang: "+a),a=a.replace(ba,ca).toLowerCase(),function(b){var c;do if(c=p?b.lang:b.getAttribute("xml:lang")||b.getAttribute("lang"))return c=c.toLowerCase(),c===a||0===c.indexOf(a+"-");while((b=b.parentNode)&&1===b.nodeType);return!1}}),target:function(b){var c=a.location&&a.location.hash;return c&&c.slice(1)===b.id},root:function(a){return a===o},focus:function(a){return a===n.activeElement&&(!n.hasFocus||n.hasFocus())&&!!(a.type||a.href||~a.tabIndex)},enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},empty:function(a){for(a=a.firstChild;a;a=a.nextSibling)if(a.nodeType<6)return!1;return!0},parent:function(a){return!d.pseudos.empty(a)},header:function(a){return Y.test(a.nodeName)},input:function(a){return X.test(a.nodeName)},button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},text:function(a){var b;return"input"===a.nodeName.toLowerCase()&&"text"===a.type&&(null==(b=a.getAttribute("type"))||"text"===b.toLowerCase())},first:na(function(){return[0]}),last:na(function(a,b){return[b-1]}),eq:na(function(a,b,c){return[0>c?c+b:c]}),even:na(function(a,b){for(var c=0;b>c;c+=2)a.push(c);return a}),odd:na(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:na(function(a,b,c){for(var d=0>c?c+b:c;--d>=0;)a.push(d);return a}),gt:na(function(a,b,c){for(var d=0>c?c+b:c;++d<b;)a.push(d);return a})}},d.pseudos.nth=d.pseudos.eq;for(b in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})d.pseudos[b]=la(b);for(b in{submit:!0,reset:!0})d.pseudos[b]=ma(b);function pa(){}pa.prototype=d.filters=d.pseudos,d.setFilters=new pa,g=fa.tokenize=function(a,b){var c,e,f,g,h,i,j,k=z[a+" "];if(k)return b?0:k.slice(0);h=a,i=[],j=d.preFilter;while(h){c&&!(e=R.exec(h))||(e&&(h=h.slice(e[0].length)||h),i.push(f=[])),c=!1,(e=S.exec(h))&&(c=e.shift(),f.push({value:c,type:e[0].replace(Q," ")}),h=h.slice(c.length));for(g in d.filter)!(e=W[g].exec(h))||j[g]&&!(e=j[g](e))||(c=e.shift(),f.push({value:c,type:g,matches:e}),h=h.slice(c.length));if(!c)break}return b?h.length:h?fa.error(a):z(a,i).slice(0)};function qa(a){for(var b=0,c=a.length,d="";c>b;b++)d+=a[b].value;return d}function ra(a,b,c){var d=b.dir,e=c&&"parentNode"===d,f=x++;return b.first?function(b,c,f){while(b=b[d])if(1===b.nodeType||e)return a(b,c,f)}:function(b,c,g){var h,i,j,k=[w,f];if(g){while(b=b[d])if((1===b.nodeType||e)&&a(b,c,g))return!0}else while(b=b[d])if(1===b.nodeType||e){if(j=b[u]||(b[u]={}),i=j[b.uniqueID]||(j[b.uniqueID]={}),(h=i[d])&&h[0]===w&&h[1]===f)return k[2]=h[2];if(i[d]=k,k[2]=a(b,c,g))return!0}}}function sa(a){return a.length>1?function(b,c,d){var e=a.length;while(e--)if(!a[e](b,c,d))return!1;return!0}:a[0]}function ta(a,b,c){for(var d=0,e=b.length;e>d;d++)fa(a,b[d],c);return c}function ua(a,b,c,d,e){for(var f,g=[],h=0,i=a.length,j=null!=b;i>h;h++)(f=a[h])&&(c&&!c(f,d,e)||(g.push(f),j&&b.push(h)));return g}function va(a,b,c,d,e,f){return d&&!d[u]&&(d=va(d)),e&&!e[u]&&(e=va(e,f)),ha(function(f,g,h,i){var j,k,l,m=[],n=[],o=g.length,p=f||ta(b||"*",h.nodeType?[h]:h,[]),q=!a||!f&&b?p:ua(p,m,a,h,i),r=c?e||(f?a:o||d)?[]:g:q;if(c&&c(q,r,h,i),d){j=ua(r,n),d(j,[],h,i),k=j.length;while(k--)(l=j[k])&&(r[n[k]]=!(q[n[k]]=l))}if(f){if(e||a){if(e){j=[],k=r.length;while(k--)(l=r[k])&&j.push(q[k]=l);e(null,r=[],j,i)}k=r.length;while(k--)(l=r[k])&&(j=e?J(f,l):m[k])>-1&&(f[j]=!(g[j]=l))}}else r=ua(r===g?r.splice(o,r.length):r),e?e(null,g,r,i):H.apply(g,r)})}function wa(a){for(var b,c,e,f=a.length,g=d.relative[a[0].type],h=g||d.relative[" "],i=g?1:0,k=ra(function(a){return a===b},h,!0),l=ra(function(a){return J(b,a)>-1},h,!0),m=[function(a,c,d){var e=!g&&(d||c!==j)||((b=c).nodeType?k(a,c,d):l(a,c,d));return b=null,e}];f>i;i++)if(c=d.relative[a[i].type])m=[ra(sa(m),c)];else{if(c=d.filter[a[i].type].apply(null,a[i].matches),c[u]){for(e=++i;f>e;e++)if(d.relative[a[e].type])break;return va(i>1&&sa(m),i>1&&qa(a.slice(0,i-1).concat({value:" "===a[i-2].type?"*":""})).replace(Q,"$1"),c,e>i&&wa(a.slice(i,e)),f>e&&wa(a=a.slice(e)),f>e&&qa(a))}m.push(c)}return sa(m)}function xa(a,b){var c=b.length>0,e=a.length>0,f=function(f,g,h,i,k){var l,o,q,r=0,s="0",t=f&&[],u=[],v=j,x=f||e&&d.find.TAG("*",k),y=w+=null==v?1:Math.random()||.1,z=x.length;for(k&&(j=g===n||g||k);s!==z&&null!=(l=x[s]);s++){if(e&&l){o=0,g||l.ownerDocument===n||(m(l),h=!p);while(q=a[o++])if(q(l,g||n,h)){i.push(l);break}k&&(w=y)}c&&((l=!q&&l)&&r--,f&&t.push(l))}if(r+=s,c&&s!==r){o=0;while(q=b[o++])q(t,u,g,h);if(f){if(r>0)while(s--)t[s]||u[s]||(u[s]=F.call(i));u=ua(u)}H.apply(i,u),k&&!f&&u.length>0&&r+b.length>1&&fa.uniqueSort(i)}return k&&(w=y,j=v),t};return c?ha(f):f}return h=fa.compile=function(a,b){var c,d=[],e=[],f=A[a+" "];if(!f){b||(b=g(a)),c=b.length;while(c--)f=wa(b[c]),f[u]?d.push(f):e.push(f);f=A(a,xa(e,d)),f.selector=a}return f},i=fa.select=function(a,b,e,f){var i,j,k,l,m,n="function"==typeof a&&a,o=!f&&g(a=n.selector||a);if(e=e||[],1===o.length){if(j=o[0]=o[0].slice(0),j.length>2&&"ID"===(k=j[0]).type&&c.getById&&9===b.nodeType&&p&&d.relative[j[1].type]){if(b=(d.find.ID(k.matches[0].replace(ba,ca),b)||[])[0],!b)return e;n&&(b=b.parentNode),a=a.slice(j.shift().value.length)}i=W.needsContext.test(a)?0:j.length;while(i--){if(k=j[i],d.relative[l=k.type])break;if((m=d.find[l])&&(f=m(k.matches[0].replace(ba,ca),_.test(j[0].type)&&oa(b.parentNode)||b))){if(j.splice(i,1),a=f.length&&qa(j),!a)return H.apply(e,f),e;break}}}return(n||h(a,o))(f,b,!p,e,!b||_.test(a)&&oa(b.parentNode)||b),e},c.sortStable=u.split("").sort(B).join("")===u,c.detectDuplicates=!!l,m(),c.sortDetached=ia(function(a){return 1&a.compareDocumentPosition(n.createElement("div"))}),ia(function(a){return a.innerHTML="<a href='#'></a>","#"===a.firstChild.getAttribute("href")})||ja("type|href|height|width",function(a,b,c){return c?void 0:a.getAttribute(b,"type"===b.toLowerCase()?1:2)}),c.attributes&&ia(function(a){return a.innerHTML="<input/>",a.firstChild.setAttribute("value",""),""===a.firstChild.getAttribute("value")})||ja("value",function(a,b,c){return c||"input"!==a.nodeName.toLowerCase()?void 0:a.defaultValue}),ia(function(a){return null==a.getAttribute("disabled")})||ja(K,function(a,b,c){var d;return c?void 0:a[b]===!0?b.toLowerCase():(d=a.getAttributeNode(b))&&d.specified?d.value:null}),fa}(a);n.find=t,n.expr=t.selectors,n.expr[":"]=n.expr.pseudos,n.uniqueSort=n.unique=t.uniqueSort,n.text=t.getText,n.isXMLDoc=t.isXML,n.contains=t.contains;var u=function(a,b,c){var d=[],e=void 0!==c;while((a=a[b])&&9!==a.nodeType)if(1===a.nodeType){if(e&&n(a).is(c))break;d.push(a)}return d},v=function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c},w=n.expr.match.needsContext,x=/^<([\w-]+)\s*\/?>(?:<\/\1>|)$/,y=/^.[^:#\[\.,]*$/;function z(a,b,c){if(n.isFunction(b))return n.grep(a,function(a,d){return!!b.call(a,d,a)!==c});if(b.nodeType)return n.grep(a,function(a){return a===b!==c});if("string"==typeof b){if(y.test(b))return n.filter(b,a,c);b=n.filter(b,a)}return n.grep(a,function(a){return n.inArray(a,b)>-1!==c})}n.filter=function(a,b,c){var d=b[0];return c&&(a=":not("+a+")"),1===b.length&&1===d.nodeType?n.find.matchesSelector(d,a)?[d]:[]:n.find.matches(a,n.grep(b,function(a){return 1===a.nodeType}))},n.fn.extend({find:function(a){var b,c=[],d=this,e=d.length;if("string"!=typeof a)return this.pushStack(n(a).filter(function(){for(b=0;e>b;b++)if(n.contains(d[b],this))return!0}));for(b=0;e>b;b++)n.find(a,d[b],c);return c=this.pushStack(e>1?n.unique(c):c),c.selector=this.selector?this.selector+" "+a:a,c},filter:function(a){return this.pushStack(z(this,a||[],!1))},not:function(a){return this.pushStack(z(this,a||[],!0))},is:function(a){return!!z(this,"string"==typeof a&&w.test(a)?n(a):a||[],!1).length}});var A,B=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,C=n.fn.init=function(a,b,c){var e,f;if(!a)return this;if(c=c||A,"string"==typeof a){if(e="<"===a.charAt(0)&&">"===a.charAt(a.length-1)&&a.length>=3?[null,a,null]:B.exec(a),!e||!e[1]&&b)return!b||b.jquery?(b||c).find(a):this.constructor(b).find(a);if(e[1]){if(b=b instanceof n?b[0]:b,n.merge(this,n.parseHTML(e[1],b&&b.nodeType?b.ownerDocument||b:d,!0)),x.test(e[1])&&n.isPlainObject(b))for(e in b)n.isFunction(this[e])?this[e](b[e]):this.attr(e,b[e]);return this}if(f=d.getElementById(e[2]),f&&f.parentNode){if(f.id!==e[2])return A.find(a);this.length=1,this[0]=f}return this.context=d,this.selector=a,this}return a.nodeType?(this.context=this[0]=a,this.length=1,this):n.isFunction(a)?"undefined"!=typeof c.ready?c.ready(a):a(n):(void 0!==a.selector&&(this.selector=a.selector,this.context=a.context),n.makeArray(a,this))};C.prototype=n.fn,A=n(d);var D=/^(?:parents|prev(?:Until|All))/,E={children:!0,contents:!0,next:!0,prev:!0};n.fn.extend({has:function(a){var b,c=n(a,this),d=c.length;return this.filter(function(){for(b=0;d>b;b++)if(n.contains(this,c[b]))return!0})},closest:function(a,b){for(var c,d=0,e=this.length,f=[],g=w.test(a)||"string"!=typeof a?n(a,b||this.context):0;e>d;d++)for(c=this[d];c&&c!==b;c=c.parentNode)if(c.nodeType<11&&(g?g.index(c)>-1:1===c.nodeType&&n.find.matchesSelector(c,a))){f.push(c);break}return this.pushStack(f.length>1?n.uniqueSort(f):f)},index:function(a){return a?"string"==typeof a?n.inArray(this[0],n(a)):n.inArray(a.jquery?a[0]:a,this):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(a,b){return this.pushStack(n.uniqueSort(n.merge(this.get(),n(a,b))))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});function F(a,b){do a=a[b];while(a&&1!==a.nodeType);return a}n.each({parent:function(a){var b=a.parentNode;return b&&11!==b.nodeType?b:null},parents:function(a){return u(a,"parentNode")},parentsUntil:function(a,b,c){return u(a,"parentNode",c)},next:function(a){return F(a,"nextSibling")},prev:function(a){return F(a,"previousSibling")},nextAll:function(a){return u(a,"nextSibling")},prevAll:function(a){return u(a,"previousSibling")},nextUntil:function(a,b,c){return u(a,"nextSibling",c)},prevUntil:function(a,b,c){return u(a,"previousSibling",c)},siblings:function(a){return v((a.parentNode||{}).firstChild,a)},children:function(a){return v(a.firstChild)},contents:function(a){return n.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:n.merge([],a.childNodes)}},function(a,b){n.fn[a]=function(c,d){var e=n.map(this,b,c);return"Until"!==a.slice(-5)&&(d=c),d&&"string"==typeof d&&(e=n.filter(d,e)),this.length>1&&(E[a]||(e=n.uniqueSort(e)),D.test(a)&&(e=e.reverse())),this.pushStack(e)}});var G=/\S+/g;function H(a){var b={};return n.each(a.match(G)||[],function(a,c){b[c]=!0}),b}n.Callbacks=function(a){a="string"==typeof a?H(a):n.extend({},a);var b,c,d,e,f=[],g=[],h=-1,i=function(){for(e=a.once,d=b=!0;g.length;h=-1){c=g.shift();while(++h<f.length)f[h].apply(c[0],c[1])===!1&&a.stopOnFalse&&(h=f.length,c=!1)}a.memory||(c=!1),b=!1,e&&(f=c?[]:"")},j={add:function(){return f&&(c&&!b&&(h=f.length-1,g.push(c)),function d(b){n.each(b,function(b,c){n.isFunction(c)?a.unique&&j.has(c)||f.push(c):c&&c.length&&"string"!==n.type(c)&&d(c)})}(arguments),c&&!b&&i()),this},remove:function(){return n.each(arguments,function(a,b){var c;while((c=n.inArray(b,f,c))>-1)f.splice(c,1),h>=c&&h--}),this},has:function(a){return a?n.inArray(a,f)>-1:f.length>0},empty:function(){return f&&(f=[]),this},disable:function(){return e=g=[],f=c="",this},disabled:function(){return!f},lock:function(){return e=!0,c||j.disable(),this},locked:function(){return!!e},fireWith:function(a,c){return e||(c=c||[],c=[a,c.slice?c.slice():c],g.push(c),b||i()),this},fire:function(){return j.fireWith(this,arguments),this},fired:function(){return!!d}};return j},n.extend({Deferred:function(a){var b=[["resolve","done",n.Callbacks("once memory"),"resolved"],["reject","fail",n.Callbacks("once memory"),"rejected"],["notify","progress",n.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return n.Deferred(function(c){n.each(b,function(b,f){var g=n.isFunction(a[b])&&a[b];e[f[1]](function(){var a=g&&g.apply(this,arguments);a&&n.isFunction(a.promise)?a.promise().progress(c.notify).done(c.resolve).fail(c.reject):c[f[0]+"With"](this===d?c.promise():this,g?[a]:arguments)})}),a=null}).promise()},promise:function(a){return null!=a?n.extend(a,d):d}},e={};return d.pipe=d.then,n.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[1^a][2].disable,b[2][2].lock),e[f[0]]=function(){return e[f[0]+"With"](this===e?d:this,arguments),this},e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=e.call(arguments),d=c.length,f=1!==d||a&&n.isFunction(a.promise)?d:0,g=1===f?a:n.Deferred(),h=function(a,b,c){return function(d){b[a]=this,c[a]=arguments.length>1?e.call(arguments):d,c===i?g.notifyWith(b,c):--f||g.resolveWith(b,c)}},i,j,k;if(d>1)for(i=new Array(d),j=new Array(d),k=new Array(d);d>b;b++)c[b]&&n.isFunction(c[b].promise)?c[b].promise().progress(h(b,j,i)).done(h(b,k,c)).fail(g.reject):--f;return f||g.resolveWith(k,c),g.promise()}});var I;n.fn.ready=function(a){return n.ready.promise().done(a),this},n.extend({isReady:!1,readyWait:1,holdReady:function(a){a?n.readyWait++:n.ready(!0)},ready:function(a){(a===!0?--n.readyWait:n.isReady)||(n.isReady=!0,a!==!0&&--n.readyWait>0||(I.resolveWith(d,[n]),n.fn.triggerHandler&&(n(d).triggerHandler("ready"),n(d).off("ready"))))}});function J(){d.addEventListener?(d.removeEventListener("DOMContentLoaded",K),a.removeEventListener("load",K)):(d.detachEvent("onreadystatechange",K),a.detachEvent("onload",K))}function K(){(d.addEventListener||"load"===a.event.type||"complete"===d.readyState)&&(J(),n.ready())}n.ready.promise=function(b){if(!I)if(I=n.Deferred(),"complete"===d.readyState||"loading"!==d.readyState&&!d.documentElement.doScroll)a.setTimeout(n.ready);else if(d.addEventListener)d.addEventListener("DOMContentLoaded",K),a.addEventListener("load",K);else{d.attachEvent("onreadystatechange",K),a.attachEvent("onload",K);var c=!1;try{c=null==a.frameElement&&d.documentElement}catch(e){}c&&c.doScroll&&!function f(){if(!n.isReady){try{c.doScroll("left")}catch(b){return a.setTimeout(f,50)}J(),n.ready()}}()}return I.promise(b)},n.ready.promise();var L;for(L in n(l))break;l.ownFirst="0"===L,l.inlineBlockNeedsLayout=!1,n(function(){var a,b,c,e;c=d.getElementsByTagName("body")[0],c&&c.style&&(b=d.createElement("div"),e=d.createElement("div"),e.style.cssText="position:absolute;border:0;width:0;height:0;top:0;left:-9999px",c.appendChild(e).appendChild(b),"undefined"!=typeof b.style.zoom&&(b.style.cssText="display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1",l.inlineBlockNeedsLayout=a=3===b.offsetWidth,a&&(c.style.zoom=1)),c.removeChild(e))}),function(){var a=d.createElement("div");l.deleteExpando=!0;try{delete a.test}catch(b){l.deleteExpando=!1}a=null}();var M=function(a){var b=n.noData[(a.nodeName+" ").toLowerCase()],c=+a.nodeType||1;return 1!==c&&9!==c?!1:!b||b!==!0&&a.getAttribute("classid")===b},N=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,O=/([A-Z])/g;function P(a,b,c){if(void 0===c&&1===a.nodeType){var d="data-"+b.replace(O,"-$1").toLowerCase();if(c=a.getAttribute(d),"string"==typeof c){try{c="true"===c?!0:"false"===c?!1:"null"===c?null:+c+""===c?+c:N.test(c)?n.parseJSON(c):c}catch(e){}n.data(a,b,c)}else c=void 0;
        }return c}function Q(a){var b;for(b in a)if(("data"!==b||!n.isEmptyObject(a[b]))&&"toJSON"!==b)return!1;return!0}function R(a,b,d,e){if(M(a)){var f,g,h=n.expando,i=a.nodeType,j=i?n.cache:a,k=i?a[h]:a[h]&&h;if(k&&j[k]&&(e||j[k].data)||void 0!==d||"string"!=typeof b)return k||(k=i?a[h]=c.pop()||n.guid++:h),j[k]||(j[k]=i?{}:{toJSON:n.noop}),"object"!=typeof b&&"function"!=typeof b||(e?j[k]=n.extend(j[k],b):j[k].data=n.extend(j[k].data,b)),g=j[k],e||(g.data||(g.data={}),g=g.data),void 0!==d&&(g[n.camelCase(b)]=d),"string"==typeof b?(f=g[b],null==f&&(f=g[n.camelCase(b)])):f=g,f}}function S(a,b,c){if(M(a)){var d,e,f=a.nodeType,g=f?n.cache:a,h=f?a[n.expando]:n.expando;if(g[h]){if(b&&(d=c?g[h]:g[h].data)){n.isArray(b)?b=b.concat(n.map(b,n.camelCase)):b in d?b=[b]:(b=n.camelCase(b),b=b in d?[b]:b.split(" ")),e=b.length;while(e--)delete d[b[e]];if(c?!Q(d):!n.isEmptyObject(d))return}(c||(delete g[h].data,Q(g[h])))&&(f?n.cleanData([a],!0):l.deleteExpando||g!=g.window?delete g[h]:g[h]=void 0)}}}n.extend({cache:{},noData:{"applet ":!0,"embed ":!0,"object ":"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"},hasData:function(a){return a=a.nodeType?n.cache[a[n.expando]]:a[n.expando],!!a&&!Q(a)},data:function(a,b,c){return R(a,b,c)},removeData:function(a,b){return S(a,b)},_data:function(a,b,c){return R(a,b,c,!0)},_removeData:function(a,b){return S(a,b,!0)}}),n.fn.extend({data:function(a,b){var c,d,e,f=this[0],g=f&&f.attributes;if(void 0===a){if(this.length&&(e=n.data(f),1===f.nodeType&&!n._data(f,"parsedAttrs"))){c=g.length;while(c--)g[c]&&(d=g[c].name,0===d.indexOf("data-")&&(d=n.camelCase(d.slice(5)),P(f,d,e[d])));n._data(f,"parsedAttrs",!0)}return e}return"object"==typeof a?this.each(function(){n.data(this,a)}):arguments.length>1?this.each(function(){n.data(this,a,b)}):f?P(f,a,n.data(f,a)):void 0},removeData:function(a){return this.each(function(){n.removeData(this,a)})}}),n.extend({queue:function(a,b,c){var d;return a?(b=(b||"fx")+"queue",d=n._data(a,b),c&&(!d||n.isArray(c)?d=n._data(a,b,n.makeArray(c)):d.push(c)),d||[]):void 0},dequeue:function(a,b){b=b||"fx";var c=n.queue(a,b),d=c.length,e=c.shift(),f=n._queueHooks(a,b),g=function(){n.dequeue(a,b)};"inprogress"===e&&(e=c.shift(),d--),e&&("fx"===b&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return n._data(a,c)||n._data(a,c,{empty:n.Callbacks("once memory").add(function(){n._removeData(a,b+"queue"),n._removeData(a,c)})})}}),n.fn.extend({queue:function(a,b){var c=2;return"string"!=typeof a&&(b=a,a="fx",c--),arguments.length<c?n.queue(this[0],a):void 0===b?this:this.each(function(){var c=n.queue(this,a,b);n._queueHooks(this,a),"fx"===a&&"inprogress"!==c[0]&&n.dequeue(this,a)})},dequeue:function(a){return this.each(function(){n.dequeue(this,a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var c,d=1,e=n.Deferred(),f=this,g=this.length,h=function(){--d||e.resolveWith(f,[f])};"string"!=typeof a&&(b=a,a=void 0),a=a||"fx";while(g--)c=n._data(f[g],a+"queueHooks"),c&&c.empty&&(d++,c.empty.add(h));return h(),e.promise(b)}}),function(){var a;l.shrinkWrapBlocks=function(){if(null!=a)return a;a=!1;var b,c,e;return c=d.getElementsByTagName("body")[0],c&&c.style?(b=d.createElement("div"),e=d.createElement("div"),e.style.cssText="position:absolute;border:0;width:0;height:0;top:0;left:-9999px",c.appendChild(e).appendChild(b),"undefined"!=typeof b.style.zoom&&(b.style.cssText="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1",b.appendChild(d.createElement("div")).style.width="5px",a=3!==b.offsetWidth),c.removeChild(e),a):void 0}}();var T=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,U=new RegExp("^(?:([+-])=|)("+T+")([a-z%]*)$","i"),V=["Top","Right","Bottom","Left"],W=function(a,b){return a=b||a,"none"===n.css(a,"display")||!n.contains(a.ownerDocument,a)};function X(a,b,c,d){var e,f=1,g=20,h=d?function(){return d.cur()}:function(){return n.css(a,b,"")},i=h(),j=c&&c[3]||(n.cssNumber[b]?"":"px"),k=(n.cssNumber[b]||"px"!==j&&+i)&&U.exec(n.css(a,b));if(k&&k[3]!==j){j=j||k[3],c=c||[],k=+i||1;do f=f||".5",k/=f,n.style(a,b,k+j);while(f!==(f=h()/i)&&1!==f&&--g)}return c&&(k=+k||+i||0,e=c[1]?k+(c[1]+1)*c[2]:+c[2],d&&(d.unit=j,d.start=k,d.end=e)),e}var Y=function(a,b,c,d,e,f,g){var h=0,i=a.length,j=null==c;if("object"===n.type(c)){e=!0;for(h in c)Y(a,b,h,c[h],!0,f,g)}else if(void 0!==d&&(e=!0,n.isFunction(d)||(g=!0),j&&(g?(b.call(a,d),b=null):(j=b,b=function(a,b,c){return j.call(n(a),c)})),b))for(;i>h;h++)b(a[h],c,g?d:d.call(a[h],h,b(a[h],c)));return e?a:j?b.call(a):i?b(a[0],c):f},Z=/^(?:checkbox|radio)$/i,$=/<([\w:-]+)/,_=/^$|\/(?:java|ecma)script/i,aa=/^\s+/,ba="abbr|article|aside|audio|bdi|canvas|data|datalist|details|dialog|figcaption|figure|footer|header|hgroup|main|mark|meter|nav|output|picture|progress|section|summary|template|time|video";function ca(a){var b=ba.split("|"),c=a.createDocumentFragment();if(c.createElement)while(b.length)c.createElement(b.pop());return c}!function(){var a=d.createElement("div"),b=d.createDocumentFragment(),c=d.createElement("input");a.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",l.leadingWhitespace=3===a.firstChild.nodeType,l.tbody=!a.getElementsByTagName("tbody").length,l.htmlSerialize=!!a.getElementsByTagName("link").length,l.html5Clone="<:nav></:nav>"!==d.createElement("nav").cloneNode(!0).outerHTML,c.type="checkbox",c.checked=!0,b.appendChild(c),l.appendChecked=c.checked,a.innerHTML="<textarea>x</textarea>",l.noCloneChecked=!!a.cloneNode(!0).lastChild.defaultValue,b.appendChild(a),c=d.createElement("input"),c.setAttribute("type","radio"),c.setAttribute("checked","checked"),c.setAttribute("name","t"),a.appendChild(c),l.checkClone=a.cloneNode(!0).cloneNode(!0).lastChild.checked,l.noCloneEvent=!!a.addEventListener,a[n.expando]=1,l.attributes=!a.getAttribute(n.expando)}();var da={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],area:[1,"<map>","</map>"],param:[1,"<object>","</object>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:l.htmlSerialize?[0,"",""]:[1,"X<div>","</div>"]};da.optgroup=da.option,da.tbody=da.tfoot=da.colgroup=da.caption=da.thead,da.th=da.td;function ea(a,b){var c,d,e=0,f="undefined"!=typeof a.getElementsByTagName?a.getElementsByTagName(b||"*"):"undefined"!=typeof a.querySelectorAll?a.querySelectorAll(b||"*"):void 0;if(!f)for(f=[],c=a.childNodes||a;null!=(d=c[e]);e++)!b||n.nodeName(d,b)?f.push(d):n.merge(f,ea(d,b));return void 0===b||b&&n.nodeName(a,b)?n.merge([a],f):f}function fa(a,b){for(var c,d=0;null!=(c=a[d]);d++)n._data(c,"globalEval",!b||n._data(b[d],"globalEval"))}var ga=/<|&#?\w+;/,ha=/<tbody/i;function ia(a){Z.test(a.type)&&(a.defaultChecked=a.checked)}function ja(a,b,c,d,e){for(var f,g,h,i,j,k,m,o=a.length,p=ca(b),q=[],r=0;o>r;r++)if(g=a[r],g||0===g)if("object"===n.type(g))n.merge(q,g.nodeType?[g]:g);else if(ga.test(g)){i=i||p.appendChild(b.createElement("div")),j=($.exec(g)||["",""])[1].toLowerCase(),m=da[j]||da._default,i.innerHTML=m[1]+n.htmlPrefilter(g)+m[2],f=m[0];while(f--)i=i.lastChild;if(!l.leadingWhitespace&&aa.test(g)&&q.push(b.createTextNode(aa.exec(g)[0])),!l.tbody){g="table"!==j||ha.test(g)?"<table>"!==m[1]||ha.test(g)?0:i:i.firstChild,f=g&&g.childNodes.length;while(f--)n.nodeName(k=g.childNodes[f],"tbody")&&!k.childNodes.length&&g.removeChild(k)}n.merge(q,i.childNodes),i.textContent="";while(i.firstChild)i.removeChild(i.firstChild);i=p.lastChild}else q.push(b.createTextNode(g));i&&p.removeChild(i),l.appendChecked||n.grep(ea(q,"input"),ia),r=0;while(g=q[r++])if(d&&n.inArray(g,d)>-1)e&&e.push(g);else if(h=n.contains(g.ownerDocument,g),i=ea(p.appendChild(g),"script"),h&&fa(i),c){f=0;while(g=i[f++])_.test(g.type||"")&&c.push(g)}return i=null,p}!function(){var b,c,e=d.createElement("div");for(b in{submit:!0,change:!0,focusin:!0})c="on"+b,(l[b]=c in a)||(e.setAttribute(c,"t"),l[b]=e.attributes[c].expando===!1);e=null}();var ka=/^(?:input|select|textarea)$/i,la=/^key/,ma=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,na=/^(?:focusinfocus|focusoutblur)$/,oa=/^([^.]*)(?:\.(.+)|)/;function pa(){return!0}function qa(){return!1}function ra(){try{return d.activeElement}catch(a){}}function sa(a,b,c,d,e,f){var g,h;if("object"==typeof b){"string"!=typeof c&&(d=d||c,c=void 0);for(h in b)sa(a,h,c,d,b[h],f);return a}if(null==d&&null==e?(e=c,d=c=void 0):null==e&&("string"==typeof c?(e=d,d=void 0):(e=d,d=c,c=void 0)),e===!1)e=qa;else if(!e)return a;return 1===f&&(g=e,e=function(a){return n().off(a),g.apply(this,arguments)},e.guid=g.guid||(g.guid=n.guid++)),a.each(function(){n.event.add(this,b,e,d,c)})}n.event={global:{},add:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=n._data(a);if(r){c.handler&&(i=c,c=i.handler,e=i.selector),c.guid||(c.guid=n.guid++),(g=r.events)||(g=r.events={}),(k=r.handle)||(k=r.handle=function(a){return"undefined"==typeof n||a&&n.event.triggered===a.type?void 0:n.event.dispatch.apply(k.elem,arguments)},k.elem=a),b=(b||"").match(G)||[""],h=b.length;while(h--)f=oa.exec(b[h])||[],o=q=f[1],p=(f[2]||"").split(".").sort(),o&&(j=n.event.special[o]||{},o=(e?j.delegateType:j.bindType)||o,j=n.event.special[o]||{},l=n.extend({type:o,origType:q,data:d,handler:c,guid:c.guid,selector:e,needsContext:e&&n.expr.match.needsContext.test(e),namespace:p.join(".")},i),(m=g[o])||(m=g[o]=[],m.delegateCount=0,j.setup&&j.setup.call(a,d,p,k)!==!1||(a.addEventListener?a.addEventListener(o,k,!1):a.attachEvent&&a.attachEvent("on"+o,k))),j.add&&(j.add.call(a,l),l.handler.guid||(l.handler.guid=c.guid)),e?m.splice(m.delegateCount++,0,l):m.push(l),n.event.global[o]=!0);a=null}},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=n.hasData(a)&&n._data(a);if(r&&(k=r.events)){b=(b||"").match(G)||[""],j=b.length;while(j--)if(h=oa.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o){l=n.event.special[o]||{},o=(d?l.delegateType:l.bindType)||o,m=k[o]||[],h=h[2]&&new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"),i=f=m.length;while(f--)g=m[f],!e&&q!==g.origType||c&&c.guid!==g.guid||h&&!h.test(g.namespace)||d&&d!==g.selector&&("**"!==d||!g.selector)||(m.splice(f,1),g.selector&&m.delegateCount--,l.remove&&l.remove.call(a,g));i&&!m.length&&(l.teardown&&l.teardown.call(a,p,r.handle)!==!1||n.removeEvent(a,o,r.handle),delete k[o])}else for(o in k)n.event.remove(a,o+b[j],c,d,!0);n.isEmptyObject(k)&&(delete r.handle,n._removeData(a,"events"))}},trigger:function(b,c,e,f){var g,h,i,j,l,m,o,p=[e||d],q=k.call(b,"type")?b.type:b,r=k.call(b,"namespace")?b.namespace.split("."):[];if(i=m=e=e||d,3!==e.nodeType&&8!==e.nodeType&&!na.test(q+n.event.triggered)&&(q.indexOf(".")>-1&&(r=q.split("."),q=r.shift(),r.sort()),h=q.indexOf(":")<0&&"on"+q,b=b[n.expando]?b:new n.Event(q,"object"==typeof b&&b),b.isTrigger=f?2:3,b.namespace=r.join("."),b.rnamespace=b.namespace?new RegExp("(^|\\.)"+r.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,b.result=void 0,b.target||(b.target=e),c=null==c?[b]:n.makeArray(c,[b]),l=n.event.special[q]||{},f||!l.trigger||l.trigger.apply(e,c)!==!1)){if(!f&&!l.noBubble&&!n.isWindow(e)){for(j=l.delegateType||q,na.test(j+q)||(i=i.parentNode);i;i=i.parentNode)p.push(i),m=i;m===(e.ownerDocument||d)&&p.push(m.defaultView||m.parentWindow||a)}o=0;while((i=p[o++])&&!b.isPropagationStopped())b.type=o>1?j:l.bindType||q,g=(n._data(i,"events")||{})[b.type]&&n._data(i,"handle"),g&&g.apply(i,c),g=h&&i[h],g&&g.apply&&M(i)&&(b.result=g.apply(i,c),b.result===!1&&b.preventDefault());if(b.type=q,!f&&!b.isDefaultPrevented()&&(!l._default||l._default.apply(p.pop(),c)===!1)&&M(e)&&h&&e[q]&&!n.isWindow(e)){m=e[h],m&&(e[h]=null),n.event.triggered=q;try{e[q]()}catch(s){}n.event.triggered=void 0,m&&(e[h]=m)}return b.result}},dispatch:function(a){a=n.event.fix(a);var b,c,d,f,g,h=[],i=e.call(arguments),j=(n._data(this,"events")||{})[a.type]||[],k=n.event.special[a.type]||{};if(i[0]=a,a.delegateTarget=this,!k.preDispatch||k.preDispatch.call(this,a)!==!1){h=n.event.handlers.call(this,a,j),b=0;while((f=h[b++])&&!a.isPropagationStopped()){a.currentTarget=f.elem,c=0;while((g=f.handlers[c++])&&!a.isImmediatePropagationStopped())a.rnamespace&&!a.rnamespace.test(g.namespace)||(a.handleObj=g,a.data=g.data,d=((n.event.special[g.origType]||{}).handle||g.handler).apply(f.elem,i),void 0!==d&&(a.result=d)===!1&&(a.preventDefault(),a.stopPropagation()))}return k.postDispatch&&k.postDispatch.call(this,a),a.result}},handlers:function(a,b){var c,d,e,f,g=[],h=b.delegateCount,i=a.target;if(h&&i.nodeType&&("click"!==a.type||isNaN(a.button)||a.button<1))for(;i!=this;i=i.parentNode||this)if(1===i.nodeType&&(i.disabled!==!0||"click"!==a.type)){for(d=[],c=0;h>c;c++)f=b[c],e=f.selector+" ",void 0===d[e]&&(d[e]=f.needsContext?n(e,this).index(i)>-1:n.find(e,this,null,[i]).length),d[e]&&d.push(f);d.length&&g.push({elem:i,handlers:d})}return h<b.length&&g.push({elem:this,handlers:b.slice(h)}),g},fix:function(a){if(a[n.expando])return a;var b,c,e,f=a.type,g=a,h=this.fixHooks[f];h||(this.fixHooks[f]=h=ma.test(f)?this.mouseHooks:la.test(f)?this.keyHooks:{}),e=h.props?this.props.concat(h.props):this.props,a=new n.Event(g),b=e.length;while(b--)c=e[b],a[c]=g[c];return a.target||(a.target=g.srcElement||d),3===a.target.nodeType&&(a.target=a.target.parentNode),a.metaKey=!!a.metaKey,h.filter?h.filter(a,g):a},props:"altKey bubbles cancelable ctrlKey currentTarget detail eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,e,f,g=b.button,h=b.fromElement;return null==a.pageX&&null!=b.clientX&&(e=a.target.ownerDocument||d,f=e.documentElement,c=e.body,a.pageX=b.clientX+(f&&f.scrollLeft||c&&c.scrollLeft||0)-(f&&f.clientLeft||c&&c.clientLeft||0),a.pageY=b.clientY+(f&&f.scrollTop||c&&c.scrollTop||0)-(f&&f.clientTop||c&&c.clientTop||0)),!a.relatedTarget&&h&&(a.relatedTarget=h===a.target?b.toElement:h),a.which||void 0===g||(a.which=1&g?1:2&g?3:4&g?2:0),a}},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==ra()&&this.focus)try{return this.focus(),!1}catch(a){}},delegateType:"focusin"},blur:{trigger:function(){return this===ra()&&this.blur?(this.blur(),!1):void 0},delegateType:"focusout"},click:{trigger:function(){return n.nodeName(this,"input")&&"checkbox"===this.type&&this.click?(this.click(),!1):void 0},_default:function(a){return n.nodeName(a.target,"a")}},beforeunload:{postDispatch:function(a){void 0!==a.result&&a.originalEvent&&(a.originalEvent.returnValue=a.result)}}},simulate:function(a,b,c){var d=n.extend(new n.Event,c,{type:a,isSimulated:!0});n.event.trigger(d,null,b),d.isDefaultPrevented()&&c.preventDefault()}},n.removeEvent=d.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c)}:function(a,b,c){var d="on"+b;a.detachEvent&&("undefined"==typeof a[d]&&(a[d]=null),a.detachEvent(d,c))},n.Event=function(a,b){return this instanceof n.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||void 0===a.defaultPrevented&&a.returnValue===!1?pa:qa):this.type=a,b&&n.extend(this,b),this.timeStamp=a&&a.timeStamp||n.now(),void(this[n.expando]=!0)):new n.Event(a,b)},n.Event.prototype={constructor:n.Event,isDefaultPrevented:qa,isPropagationStopped:qa,isImmediatePropagationStopped:qa,preventDefault:function(){var a=this.originalEvent;this.isDefaultPrevented=pa,a&&(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){var a=this.originalEvent;this.isPropagationStopped=pa,a&&!this.isSimulated&&(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){var a=this.originalEvent;this.isImmediatePropagationStopped=pa,a&&a.stopImmediatePropagation&&a.stopImmediatePropagation(),this.stopPropagation()}},n.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(a,b){n.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj;return e&&(e===d||n.contains(d,e))||(a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b),c}}}),l.submit||(n.event.special.submit={setup:function(){return n.nodeName(this,"form")?!1:void n.event.add(this,"click._submit keypress._submit",function(a){var b=a.target,c=n.nodeName(b,"input")||n.nodeName(b,"button")?n.prop(b,"form"):void 0;c&&!n._data(c,"submit")&&(n.event.add(c,"submit._submit",function(a){a._submitBubble=!0}),n._data(c,"submit",!0))})},postDispatch:function(a){a._submitBubble&&(delete a._submitBubble,this.parentNode&&!a.isTrigger&&n.event.simulate("submit",this.parentNode,a))},teardown:function(){return n.nodeName(this,"form")?!1:void n.event.remove(this,"._submit")}}),l.change||(n.event.special.change={setup:function(){return ka.test(this.nodeName)?("checkbox"!==this.type&&"radio"!==this.type||(n.event.add(this,"propertychange._change",function(a){"checked"===a.originalEvent.propertyName&&(this._justChanged=!0)}),n.event.add(this,"click._change",function(a){this._justChanged&&!a.isTrigger&&(this._justChanged=!1),n.event.simulate("change",this,a)})),!1):void n.event.add(this,"beforeactivate._change",function(a){var b=a.target;ka.test(b.nodeName)&&!n._data(b,"change")&&(n.event.add(b,"change._change",function(a){!this.parentNode||a.isSimulated||a.isTrigger||n.event.simulate("change",this.parentNode,a)}),n._data(b,"change",!0))})},handle:function(a){var b=a.target;return this!==b||a.isSimulated||a.isTrigger||"radio"!==b.type&&"checkbox"!==b.type?a.handleObj.handler.apply(this,arguments):void 0},teardown:function(){return n.event.remove(this,"._change"),!ka.test(this.nodeName)}}),l.focusin||n.each({focus:"focusin",blur:"focusout"},function(a,b){var c=function(a){n.event.simulate(b,a.target,n.event.fix(a))};n.event.special[b]={setup:function(){var d=this.ownerDocument||this,e=n._data(d,b);e||d.addEventListener(a,c,!0),n._data(d,b,(e||0)+1)},teardown:function(){var d=this.ownerDocument||this,e=n._data(d,b)-1;e?n._data(d,b,e):(d.removeEventListener(a,c,!0),n._removeData(d,b))}}}),n.fn.extend({on:function(a,b,c,d){return sa(this,a,b,c,d)},one:function(a,b,c,d){return sa(this,a,b,c,d,1)},off:function(a,b,c){var d,e;if(a&&a.preventDefault&&a.handleObj)return d=a.handleObj,n(a.delegateTarget).off(d.namespace?d.origType+"."+d.namespace:d.origType,d.selector,d.handler),this;if("object"==typeof a){for(e in a)this.off(e,b,a[e]);return this}return b!==!1&&"function"!=typeof b||(c=b,b=void 0),c===!1&&(c=qa),this.each(function(){n.event.remove(this,a,c,b)})},trigger:function(a,b){return this.each(function(){n.event.trigger(a,b,this)})},triggerHandler:function(a,b){var c=this[0];return c?n.event.trigger(a,b,c,!0):void 0}});var ta=/ jQuery\d+="(?:null|\d+)"/g,ua=new RegExp("<(?:"+ba+")[\\s/>]","i"),va=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi,wa=/<script|<style|<link/i,xa=/checked\s*(?:[^=]|=\s*.checked.)/i,ya=/^true\/(.*)/,za=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,Aa=ca(d),Ba=Aa.appendChild(d.createElement("div"));function Ca(a,b){return n.nodeName(a,"table")&&n.nodeName(11!==b.nodeType?b:b.firstChild,"tr")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function Da(a){return a.type=(null!==n.find.attr(a,"type"))+"/"+a.type,a}function Ea(a){var b=ya.exec(a.type);return b?a.type=b[1]:a.removeAttribute("type"),a}function Fa(a,b){if(1===b.nodeType&&n.hasData(a)){var c,d,e,f=n._data(a),g=n._data(b,f),h=f.events;if(h){delete g.handle,g.events={};for(c in h)for(d=0,e=h[c].length;e>d;d++)n.event.add(b,c,h[c][d])}g.data&&(g.data=n.extend({},g.data))}}function Ga(a,b){var c,d,e;if(1===b.nodeType){if(c=b.nodeName.toLowerCase(),!l.noCloneEvent&&b[n.expando]){e=n._data(b);for(d in e.events)n.removeEvent(b,d,e.handle);b.removeAttribute(n.expando)}"script"===c&&b.text!==a.text?(Da(b).text=a.text,Ea(b)):"object"===c?(b.parentNode&&(b.outerHTML=a.outerHTML),l.html5Clone&&a.innerHTML&&!n.trim(b.innerHTML)&&(b.innerHTML=a.innerHTML)):"input"===c&&Z.test(a.type)?(b.defaultChecked=b.checked=a.checked,b.value!==a.value&&(b.value=a.value)):"option"===c?b.defaultSelected=b.selected=a.defaultSelected:"input"!==c&&"textarea"!==c||(b.defaultValue=a.defaultValue)}}function Ha(a,b,c,d){b=f.apply([],b);var e,g,h,i,j,k,m=0,o=a.length,p=o-1,q=b[0],r=n.isFunction(q);if(r||o>1&&"string"==typeof q&&!l.checkClone&&xa.test(q))return a.each(function(e){var f=a.eq(e);r&&(b[0]=q.call(this,e,f.html())),Ha(f,b,c,d)});if(o&&(k=ja(b,a[0].ownerDocument,!1,a,d),e=k.firstChild,1===k.childNodes.length&&(k=e),e||d)){for(i=n.map(ea(k,"script"),Da),h=i.length;o>m;m++)g=k,m!==p&&(g=n.clone(g,!0,!0),h&&n.merge(i,ea(g,"script"))),c.call(a[m],g,m);if(h)for(j=i[i.length-1].ownerDocument,n.map(i,Ea),m=0;h>m;m++)g=i[m],_.test(g.type||"")&&!n._data(g,"globalEval")&&n.contains(j,g)&&(g.src?n._evalUrl&&n._evalUrl(g.src):n.globalEval((g.text||g.textContent||g.innerHTML||"").replace(za,"")));k=e=null}return a}function Ia(a,b,c){for(var d,e=b?n.filter(b,a):a,f=0;null!=(d=e[f]);f++)c||1!==d.nodeType||n.cleanData(ea(d)),d.parentNode&&(c&&n.contains(d.ownerDocument,d)&&fa(ea(d,"script")),d.parentNode.removeChild(d));return a}n.extend({htmlPrefilter:function(a){return a.replace(va,"<$1></$2>")},clone:function(a,b,c){var d,e,f,g,h,i=n.contains(a.ownerDocument,a);if(l.html5Clone||n.isXMLDoc(a)||!ua.test("<"+a.nodeName+">")?f=a.cloneNode(!0):(Ba.innerHTML=a.outerHTML,Ba.removeChild(f=Ba.firstChild)),!(l.noCloneEvent&&l.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||n.isXMLDoc(a)))for(d=ea(f),h=ea(a),g=0;null!=(e=h[g]);++g)d[g]&&Ga(e,d[g]);if(b)if(c)for(h=h||ea(a),d=d||ea(f),g=0;null!=(e=h[g]);g++)Fa(e,d[g]);else Fa(a,f);return d=ea(f,"script"),d.length>0&&fa(d,!i&&ea(a,"script")),d=h=e=null,f},cleanData:function(a,b){for(var d,e,f,g,h=0,i=n.expando,j=n.cache,k=l.attributes,m=n.event.special;null!=(d=a[h]);h++)if((b||M(d))&&(f=d[i],g=f&&j[f])){if(g.events)for(e in g.events)m[e]?n.event.remove(d,e):n.removeEvent(d,e,g.handle);j[f]&&(delete j[f],k||"undefined"==typeof d.removeAttribute?d[i]=void 0:d.removeAttribute(i),c.push(f))}}}),n.fn.extend({domManip:Ha,detach:function(a){return Ia(this,a,!0)},remove:function(a){return Ia(this,a)},text:function(a){return Y(this,function(a){return void 0===a?n.text(this):this.empty().append((this[0]&&this[0].ownerDocument||d).createTextNode(a))},null,a,arguments.length)},append:function(){return Ha(this,arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=Ca(this,a);b.appendChild(a)}})},prepend:function(){return Ha(this,arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=Ca(this,a);b.insertBefore(a,b.firstChild)}})},before:function(){return Ha(this,arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this)})},after:function(){return Ha(this,arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this.nextSibling)})},empty:function(){for(var a,b=0;null!=(a=this[b]);b++){1===a.nodeType&&n.cleanData(ea(a,!1));while(a.firstChild)a.removeChild(a.firstChild);a.options&&n.nodeName(a,"select")&&(a.options.length=0)}return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return n.clone(this,a,b)})},html:function(a){return Y(this,function(a){var b=this[0]||{},c=0,d=this.length;if(void 0===a)return 1===b.nodeType?b.innerHTML.replace(ta,""):void 0;if("string"==typeof a&&!wa.test(a)&&(l.htmlSerialize||!ua.test(a))&&(l.leadingWhitespace||!aa.test(a))&&!da[($.exec(a)||["",""])[1].toLowerCase()]){a=n.htmlPrefilter(a);try{for(;d>c;c++)b=this[c]||{},1===b.nodeType&&(n.cleanData(ea(b,!1)),b.innerHTML=a);b=0}catch(e){}}b&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(){var a=[];return Ha(this,arguments,function(b){var c=this.parentNode;n.inArray(this,a)<0&&(n.cleanData(ea(this)),c&&c.replaceChild(b,this))},a)}}),n.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){n.fn[a]=function(a){for(var c,d=0,e=[],f=n(a),h=f.length-1;h>=d;d++)c=d===h?this:this.clone(!0),n(f[d])[b](c),g.apply(e,c.get());return this.pushStack(e)}});var Ja,Ka={HTML:"block",BODY:"block"};function La(a,b){var c=n(b.createElement(a)).appendTo(b.body),d=n.css(c[0],"display");return c.detach(),d}function Ma(a){var b=d,c=Ka[a];return c||(c=La(a,b),"none"!==c&&c||(Ja=(Ja||n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement),b=(Ja[0].contentWindow||Ja[0].contentDocument).document,b.write(),b.close(),c=La(a,b),Ja.detach()),Ka[a]=c),c}var Na=/^margin/,Oa=new RegExp("^("+T+")(?!px)[a-z%]+$","i"),Pa=function(a,b,c,d){var e,f,g={};for(f in b)g[f]=a.style[f],a.style[f]=b[f];e=c.apply(a,d||[]);for(f in b)a.style[f]=g[f];return e},Qa=d.documentElement;!function(){var b,c,e,f,g,h,i=d.createElement("div"),j=d.createElement("div");if(j.style){j.style.cssText="float:left;opacity:.5",l.opacity="0.5"===j.style.opacity,l.cssFloat=!!j.style.cssFloat,j.style.backgroundClip="content-box",j.cloneNode(!0).style.backgroundClip="",l.clearCloneStyle="content-box"===j.style.backgroundClip,i=d.createElement("div"),i.style.cssText="border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute",j.innerHTML="",i.appendChild(j),l.boxSizing=""===j.style.boxSizing||""===j.style.MozBoxSizing||""===j.style.WebkitBoxSizing,n.extend(l,{reliableHiddenOffsets:function(){return null==b&&k(),f},boxSizingReliable:function(){return null==b&&k(),e},pixelMarginRight:function(){return null==b&&k(),c},pixelPosition:function(){return null==b&&k(),b},reliableMarginRight:function(){return null==b&&k(),g},reliableMarginLeft:function(){return null==b&&k(),h}});function k(){var k,l,m=d.documentElement;m.appendChild(i),j.style.cssText="-webkit-box-sizing:border-box;box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%",b=e=h=!1,c=g=!0,a.getComputedStyle&&(l=a.getComputedStyle(j),b="1%"!==(l||{}).top,h="2px"===(l||{}).marginLeft,e="4px"===(l||{width:"4px"}).width,j.style.marginRight="50%",c="4px"===(l||{marginRight:"4px"}).marginRight,k=j.appendChild(d.createElement("div")),k.style.cssText=j.style.cssText="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0",k.style.marginRight=k.style.width="0",j.style.width="1px",g=!parseFloat((a.getComputedStyle(k)||{}).marginRight),j.removeChild(k)),j.style.display="none",f=0===j.getClientRects().length,f&&(j.style.display="",j.innerHTML="<table><tr><td></td><td>t</td></tr></table>",k=j.getElementsByTagName("td"),k[0].style.cssText="margin:0;border:0;padding:0;display:none",f=0===k[0].offsetHeight,f&&(k[0].style.display="",k[1].style.display="none",f=0===k[0].offsetHeight)),m.removeChild(i)}}}();var Ra,Sa,Ta=/^(top|right|bottom|left)$/;a.getComputedStyle?(Ra=function(b){var c=b.ownerDocument.defaultView;return c&&c.opener||(c=a),c.getComputedStyle(b)},Sa=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Ra(a),g=c?c.getPropertyValue(b)||c[b]:void 0,""!==g&&void 0!==g||n.contains(a.ownerDocument,a)||(g=n.style(a,b)),c&&!l.pixelMarginRight()&&Oa.test(g)&&Na.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=g,g=c.width,h.width=d,h.minWidth=e,h.maxWidth=f),void 0===g?g:g+""}):Qa.currentStyle&&(Ra=function(a){return a.currentStyle},Sa=function(a,b,c){var d,e,f,g,h=a.style;return c=c||Ra(a),g=c?c[b]:void 0,null==g&&h&&h[b]&&(g=h[b]),Oa.test(g)&&!Ta.test(b)&&(d=h.left,e=a.runtimeStyle,f=e&&e.left,f&&(e.left=a.currentStyle.left),h.left="fontSize"===b?"1em":g,g=h.pixelLeft+"px",h.left=d,f&&(e.left=f)),void 0===g?g:g+""||"auto"});function Ua(a,b){return{get:function(){return a()?void delete this.get:(this.get=b).apply(this,arguments)}}}var Va=/alpha\([^)]*\)/i,Wa=/opacity\s*=\s*([^)]*)/i,Xa=/^(none|table(?!-c[ea]).+)/,Ya=new RegExp("^("+T+")(.*)$","i"),Za={position:"absolute",visibility:"hidden",display:"block"},$a={letterSpacing:"0",fontWeight:"400"},_a=["Webkit","O","Moz","ms"],ab=d.createElement("div").style;function bb(a){if(a in ab)return a;var b=a.charAt(0).toUpperCase()+a.slice(1),c=_a.length;while(c--)if(a=_a[c]+b,a in ab)return a}function cb(a,b){for(var c,d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=n._data(d,"olddisplay"),c=d.style.display,b?(f[g]||"none"!==c||(d.style.display=""),""===d.style.display&&W(d)&&(f[g]=n._data(d,"olddisplay",Ma(d.nodeName)))):(e=W(d),(c&&"none"!==c||!e)&&n._data(d,"olddisplay",e?c:n.css(d,"display"))));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}function db(a,b,c){var d=Ya.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function eb(a,b,c,d,e){for(var f=c===(d?"border":"content")?4:"width"===b?1:0,g=0;4>f;f+=2)"margin"===c&&(g+=n.css(a,c+V[f],!0,e)),d?("content"===c&&(g-=n.css(a,"padding"+V[f],!0,e)),"margin"!==c&&(g-=n.css(a,"border"+V[f]+"Width",!0,e))):(g+=n.css(a,"padding"+V[f],!0,e),"padding"!==c&&(g+=n.css(a,"border"+V[f]+"Width",!0,e)));return g}function fb(b,c,e){var f=!0,g="width"===c?b.offsetWidth:b.offsetHeight,h=Ra(b),i=l.boxSizing&&"border-box"===n.css(b,"boxSizing",!1,h);if(d.msFullscreenElement&&a.top!==a&&b.getClientRects().length&&(g=Math.round(100*b.getBoundingClientRect()[c])),0>=g||null==g){if(g=Sa(b,c,h),(0>g||null==g)&&(g=b.style[c]),Oa.test(g))return g;f=i&&(l.boxSizingReliable()||g===b.style[c]),g=parseFloat(g)||0}return g+eb(b,c,e||(i?"border":"content"),f,h)+"px"}n.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=Sa(a,"opacity");return""===c?"1":c}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":l.cssFloat?"cssFloat":"styleFloat"},style:function(a,b,c,d){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var e,f,g,h=n.camelCase(b),i=a.style;if(b=n.cssProps[h]||(n.cssProps[h]=bb(h)||h),g=n.cssHooks[b]||n.cssHooks[h],void 0===c)return g&&"get"in g&&void 0!==(e=g.get(a,!1,d))?e:i[b];if(f=typeof c,"string"===f&&(e=U.exec(c))&&e[1]&&(c=X(a,b,e),f="number"),null!=c&&c===c&&("number"===f&&(c+=e&&e[3]||(n.cssNumber[h]?"":"px")),l.clearCloneStyle||""!==c||0!==b.indexOf("background")||(i[b]="inherit"),!(g&&"set"in g&&void 0===(c=g.set(a,c,d)))))try{i[b]=c}catch(j){}}},css:function(a,b,c,d){var e,f,g,h=n.camelCase(b);return b=n.cssProps[h]||(n.cssProps[h]=bb(h)||h),g=n.cssHooks[b]||n.cssHooks[h],g&&"get"in g&&(f=g.get(a,!0,c)),void 0===f&&(f=Sa(a,b,d)),"normal"===f&&b in $a&&(f=$a[b]),""===c||c?(e=parseFloat(f),c===!0||isFinite(e)?e||0:f):f}}),n.each(["height","width"],function(a,b){n.cssHooks[b]={get:function(a,c,d){return c?Xa.test(n.css(a,"display"))&&0===a.offsetWidth?Pa(a,Za,function(){return fb(a,b,d)}):fb(a,b,d):void 0},set:function(a,c,d){var e=d&&Ra(a);return db(a,c,d?eb(a,b,d,l.boxSizing&&"border-box"===n.css(a,"boxSizing",!1,e),e):0)}}}),l.opacity||(n.cssHooks.opacity={get:function(a,b){return Wa.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?.01*parseFloat(RegExp.$1)+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=n.isNumeric(b)?"alpha(opacity="+100*b+")":"",f=d&&d.filter||c.filter||"";c.zoom=1,(b>=1||""===b)&&""===n.trim(f.replace(Va,""))&&c.removeAttribute&&(c.removeAttribute("filter"),""===b||d&&!d.filter)||(c.filter=Va.test(f)?f.replace(Va,e):f+" "+e)}}),n.cssHooks.marginRight=Ua(l.reliableMarginRight,function(a,b){return b?Pa(a,{display:"inline-block"},Sa,[a,"marginRight"]):void 0}),n.cssHooks.marginLeft=Ua(l.reliableMarginLeft,function(a,b){
            return b?(parseFloat(Sa(a,"marginLeft"))||(n.contains(a.ownerDocument,a)?a.getBoundingClientRect().left-Pa(a,{marginLeft:0},function(){return a.getBoundingClientRect().left}):0))+"px":void 0}),n.each({margin:"",padding:"",border:"Width"},function(a,b){n.cssHooks[a+b]={expand:function(c){for(var d=0,e={},f="string"==typeof c?c.split(" "):[c];4>d;d++)e[a+V[d]+b]=f[d]||f[d-2]||f[0];return e}},Na.test(a)||(n.cssHooks[a+b].set=db)}),n.fn.extend({css:function(a,b){return Y(this,function(a,b,c){var d,e,f={},g=0;if(n.isArray(b)){for(d=Ra(a),e=b.length;e>g;g++)f[b[g]]=n.css(a,b[g],!1,d);return f}return void 0!==c?n.style(a,b,c):n.css(a,b)},a,b,arguments.length>1)},show:function(){return cb(this,!0)},hide:function(){return cb(this)},toggle:function(a){return"boolean"==typeof a?a?this.show():this.hide():this.each(function(){W(this)?n(this).show():n(this).hide()})}});function gb(a,b,c,d,e){return new gb.prototype.init(a,b,c,d,e)}n.Tween=gb,gb.prototype={constructor:gb,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||n.easing._default,this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(n.cssNumber[c]?"":"px")},cur:function(){var a=gb.propHooks[this.prop];return a&&a.get?a.get(this):gb.propHooks._default.get(this)},run:function(a){var b,c=gb.propHooks[this.prop];return this.options.duration?this.pos=b=n.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):this.pos=b=a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):gb.propHooks._default.set(this),this}},gb.prototype.init.prototype=gb.prototype,gb.propHooks={_default:{get:function(a){var b;return 1!==a.elem.nodeType||null!=a.elem[a.prop]&&null==a.elem.style[a.prop]?a.elem[a.prop]:(b=n.css(a.elem,a.prop,""),b&&"auto"!==b?b:0)},set:function(a){n.fx.step[a.prop]?n.fx.step[a.prop](a):1!==a.elem.nodeType||null==a.elem.style[n.cssProps[a.prop]]&&!n.cssHooks[a.prop]?a.elem[a.prop]=a.now:n.style(a.elem,a.prop,a.now+a.unit)}}},gb.propHooks.scrollTop=gb.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},n.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2},_default:"swing"},n.fx=gb.prototype.init,n.fx.step={};var hb,ib,jb=/^(?:toggle|show|hide)$/,kb=/queueHooks$/;function lb(){return a.setTimeout(function(){hb=void 0}),hb=n.now()}function mb(a,b){var c,d={height:a},e=0;for(b=b?1:0;4>e;e+=2-b)c=V[e],d["margin"+c]=d["padding"+c]=a;return b&&(d.opacity=d.width=a),d}function nb(a,b,c){for(var d,e=(qb.tweeners[b]||[]).concat(qb.tweeners["*"]),f=0,g=e.length;g>f;f++)if(d=e[f].call(c,b,a))return d}function ob(a,b,c){var d,e,f,g,h,i,j,k,m=this,o={},p=a.style,q=a.nodeType&&W(a),r=n._data(a,"fxshow");c.queue||(h=n._queueHooks(a,"fx"),null==h.unqueued&&(h.unqueued=0,i=h.empty.fire,h.empty.fire=function(){h.unqueued||i()}),h.unqueued++,m.always(function(){m.always(function(){h.unqueued--,n.queue(a,"fx").length||h.empty.fire()})})),1===a.nodeType&&("height"in b||"width"in b)&&(c.overflow=[p.overflow,p.overflowX,p.overflowY],j=n.css(a,"display"),k="none"===j?n._data(a,"olddisplay")||Ma(a.nodeName):j,"inline"===k&&"none"===n.css(a,"float")&&(l.inlineBlockNeedsLayout&&"inline"!==Ma(a.nodeName)?p.zoom=1:p.display="inline-block")),c.overflow&&(p.overflow="hidden",l.shrinkWrapBlocks()||m.always(function(){p.overflow=c.overflow[0],p.overflowX=c.overflow[1],p.overflowY=c.overflow[2]}));for(d in b)if(e=b[d],jb.exec(e)){if(delete b[d],f=f||"toggle"===e,e===(q?"hide":"show")){if("show"!==e||!r||void 0===r[d])continue;q=!0}o[d]=r&&r[d]||n.style(a,d)}else j=void 0;if(n.isEmptyObject(o))"inline"===("none"===j?Ma(a.nodeName):j)&&(p.display=j);else{r?"hidden"in r&&(q=r.hidden):r=n._data(a,"fxshow",{}),f&&(r.hidden=!q),q?n(a).show():m.done(function(){n(a).hide()}),m.done(function(){var b;n._removeData(a,"fxshow");for(b in o)n.style(a,b,o[b])});for(d in o)g=nb(q?r[d]:0,d,m),d in r||(r[d]=g.start,q&&(g.end=g.start,g.start="width"===d||"height"===d?1:0))}}function pb(a,b){var c,d,e,f,g;for(c in a)if(d=n.camelCase(c),e=b[d],f=a[c],n.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=n.cssHooks[d],g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}function qb(a,b,c){var d,e,f=0,g=qb.prefilters.length,h=n.Deferred().always(function(){delete i.elem}),i=function(){if(e)return!1;for(var b=hb||lb(),c=Math.max(0,j.startTime+j.duration-b),d=c/j.duration||0,f=1-d,g=0,i=j.tweens.length;i>g;g++)j.tweens[g].run(f);return h.notifyWith(a,[j,f,c]),1>f&&i?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:n.extend({},b),opts:n.extend(!0,{specialEasing:{},easing:n.easing._default},c),originalProperties:b,originalOptions:c,startTime:hb||lb(),duration:c.duration,tweens:[],createTween:function(b,c){var d=n.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(d),d},stop:function(b){var c=0,d=b?j.tweens.length:0;if(e)return this;for(e=!0;d>c;c++)j.tweens[c].run(1);return b?(h.notifyWith(a,[j,1,0]),h.resolveWith(a,[j,b])):h.rejectWith(a,[j,b]),this}}),k=j.props;for(pb(k,j.opts.specialEasing);g>f;f++)if(d=qb.prefilters[f].call(j,a,k,j.opts))return n.isFunction(d.stop)&&(n._queueHooks(j.elem,j.opts.queue).stop=n.proxy(d.stop,d)),d;return n.map(k,nb,j),n.isFunction(j.opts.start)&&j.opts.start.call(a,j),n.fx.timer(n.extend(i,{elem:a,anim:j,queue:j.opts.queue})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}n.Animation=n.extend(qb,{tweeners:{"*":[function(a,b){var c=this.createTween(a,b);return X(c.elem,a,U.exec(b),c),c}]},tweener:function(a,b){n.isFunction(a)?(b=a,a=["*"]):a=a.match(G);for(var c,d=0,e=a.length;e>d;d++)c=a[d],qb.tweeners[c]=qb.tweeners[c]||[],qb.tweeners[c].unshift(b)},prefilters:[ob],prefilter:function(a,b){b?qb.prefilters.unshift(a):qb.prefilters.push(a)}}),n.speed=function(a,b,c){var d=a&&"object"==typeof a?n.extend({},a):{complete:c||!c&&b||n.isFunction(a)&&a,duration:a,easing:c&&b||b&&!n.isFunction(b)&&b};return d.duration=n.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in n.fx.speeds?n.fx.speeds[d.duration]:n.fx.speeds._default,null!=d.queue&&d.queue!==!0||(d.queue="fx"),d.old=d.complete,d.complete=function(){n.isFunction(d.old)&&d.old.call(this),d.queue&&n.dequeue(this,d.queue)},d},n.fn.extend({fadeTo:function(a,b,c,d){return this.filter(W).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=n.isEmptyObject(a),f=n.speed(b,c,d),g=function(){var b=qb(this,n.extend({},a),f);(e||n._data(this,"finish"))&&b.stop(!0)};return g.finish=g,e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,b,c){var d=function(a){var b=a.stop;delete a.stop,b(c)};return"string"!=typeof a&&(c=b,b=a,a=void 0),b&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,e=null!=a&&a+"queueHooks",f=n.timers,g=n._data(this);if(e)g[e]&&g[e].stop&&d(g[e]);else for(e in g)g[e]&&g[e].stop&&kb.test(e)&&d(g[e]);for(e=f.length;e--;)f[e].elem!==this||null!=a&&f[e].queue!==a||(f[e].anim.stop(c),b=!1,f.splice(e,1));!b&&c||n.dequeue(this,a)})},finish:function(a){return a!==!1&&(a=a||"fx"),this.each(function(){var b,c=n._data(this),d=c[a+"queue"],e=c[a+"queueHooks"],f=n.timers,g=d?d.length:0;for(c.finish=!0,n.queue(this,a,[]),e&&e.stop&&e.stop.call(this,!0),b=f.length;b--;)f[b].elem===this&&f[b].queue===a&&(f[b].anim.stop(!0),f.splice(b,1));for(b=0;g>b;b++)d[b]&&d[b].finish&&d[b].finish.call(this);delete c.finish})}}),n.each(["toggle","show","hide"],function(a,b){var c=n.fn[b];n.fn[b]=function(a,d,e){return null==a||"boolean"==typeof a?c.apply(this,arguments):this.animate(mb(b,!0),a,d,e)}}),n.each({slideDown:mb("show"),slideUp:mb("hide"),slideToggle:mb("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){n.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),n.timers=[],n.fx.tick=function(){var a,b=n.timers,c=0;for(hb=n.now();c<b.length;c++)a=b[c],a()||b[c]!==a||b.splice(c--,1);b.length||n.fx.stop(),hb=void 0},n.fx.timer=function(a){n.timers.push(a),a()?n.fx.start():n.timers.pop()},n.fx.interval=13,n.fx.start=function(){ib||(ib=a.setInterval(n.fx.tick,n.fx.interval))},n.fx.stop=function(){a.clearInterval(ib),ib=null},n.fx.speeds={slow:600,fast:200,_default:400},n.fn.delay=function(b,c){return b=n.fx?n.fx.speeds[b]||b:b,c=c||"fx",this.queue(c,function(c,d){var e=a.setTimeout(c,b);d.stop=function(){a.clearTimeout(e)}})},function(){var a,b=d.createElement("input"),c=d.createElement("div"),e=d.createElement("select"),f=e.appendChild(d.createElement("option"));c=d.createElement("div"),c.setAttribute("className","t"),c.innerHTML="  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>",a=c.getElementsByTagName("a")[0],b.setAttribute("type","checkbox"),c.appendChild(b),a=c.getElementsByTagName("a")[0],a.style.cssText="top:1px",l.getSetAttribute="t"!==c.className,l.style=/top/.test(a.getAttribute("style")),l.hrefNormalized="/a"===a.getAttribute("href"),l.checkOn=!!b.value,l.optSelected=f.selected,l.enctype=!!d.createElement("form").enctype,e.disabled=!0,l.optDisabled=!f.disabled,b=d.createElement("input"),b.setAttribute("value",""),l.input=""===b.getAttribute("value"),b.value="t",b.setAttribute("type","radio"),l.radioValue="t"===b.value}();var rb=/\r/g,sb=/[\x20\t\r\n\f]+/g;n.fn.extend({val:function(a){var b,c,d,e=this[0];{if(arguments.length)return d=n.isFunction(a),this.each(function(c){var e;1===this.nodeType&&(e=d?a.call(this,c,n(this).val()):a,null==e?e="":"number"==typeof e?e+="":n.isArray(e)&&(e=n.map(e,function(a){return null==a?"":a+""})),b=n.valHooks[this.type]||n.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&void 0!==b.set(this,e,"value")||(this.value=e))});if(e)return b=n.valHooks[e.type]||n.valHooks[e.nodeName.toLowerCase()],b&&"get"in b&&void 0!==(c=b.get(e,"value"))?c:(c=e.value,"string"==typeof c?c.replace(rb,""):null==c?"":c)}}}),n.extend({valHooks:{option:{get:function(a){var b=n.find.attr(a,"value");return null!=b?b:n.trim(n.text(a)).replace(sb," ")}},select:{get:function(a){for(var b,c,d=a.options,e=a.selectedIndex,f="select-one"===a.type||0>e,g=f?null:[],h=f?e+1:d.length,i=0>e?h:f?e:0;h>i;i++)if(c=d[i],(c.selected||i===e)&&(l.optDisabled?!c.disabled:null===c.getAttribute("disabled"))&&(!c.parentNode.disabled||!n.nodeName(c.parentNode,"optgroup"))){if(b=n(c).val(),f)return b;g.push(b)}return g},set:function(a,b){var c,d,e=a.options,f=n.makeArray(b),g=e.length;while(g--)if(d=e[g],n.inArray(n.valHooks.option.get(d),f)>-1)try{d.selected=c=!0}catch(h){d.scrollHeight}else d.selected=!1;return c||(a.selectedIndex=-1),e}}}}),n.each(["radio","checkbox"],function(){n.valHooks[this]={set:function(a,b){return n.isArray(b)?a.checked=n.inArray(n(a).val(),b)>-1:void 0}},l.checkOn||(n.valHooks[this].get=function(a){return null===a.getAttribute("value")?"on":a.value})});var tb,ub,vb=n.expr.attrHandle,wb=/^(?:checked|selected)$/i,xb=l.getSetAttribute,yb=l.input;n.fn.extend({attr:function(a,b){return Y(this,n.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){n.removeAttr(this,a)})}}),n.extend({attr:function(a,b,c){var d,e,f=a.nodeType;if(3!==f&&8!==f&&2!==f)return"undefined"==typeof a.getAttribute?n.prop(a,b,c):(1===f&&n.isXMLDoc(a)||(b=b.toLowerCase(),e=n.attrHooks[b]||(n.expr.match.bool.test(b)?ub:tb)),void 0!==c?null===c?void n.removeAttr(a,b):e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:(a.setAttribute(b,c+""),c):e&&"get"in e&&null!==(d=e.get(a,b))?d:(d=n.find.attr(a,b),null==d?void 0:d))},attrHooks:{type:{set:function(a,b){if(!l.radioValue&&"radio"===b&&n.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}}},removeAttr:function(a,b){var c,d,e=0,f=b&&b.match(G);if(f&&1===a.nodeType)while(c=f[e++])d=n.propFix[c]||c,n.expr.match.bool.test(c)?yb&&xb||!wb.test(c)?a[d]=!1:a[n.camelCase("default-"+c)]=a[d]=!1:n.attr(a,c,""),a.removeAttribute(xb?c:d)}}),ub={set:function(a,b,c){return b===!1?n.removeAttr(a,c):yb&&xb||!wb.test(c)?a.setAttribute(!xb&&n.propFix[c]||c,c):a[n.camelCase("default-"+c)]=a[c]=!0,c}},n.each(n.expr.match.bool.source.match(/\w+/g),function(a,b){var c=vb[b]||n.find.attr;yb&&xb||!wb.test(b)?vb[b]=function(a,b,d){var e,f;return d||(f=vb[b],vb[b]=e,e=null!=c(a,b,d)?b.toLowerCase():null,vb[b]=f),e}:vb[b]=function(a,b,c){return c?void 0:a[n.camelCase("default-"+b)]?b.toLowerCase():null}}),yb&&xb||(n.attrHooks.value={set:function(a,b,c){return n.nodeName(a,"input")?void(a.defaultValue=b):tb&&tb.set(a,b,c)}}),xb||(tb={set:function(a,b,c){var d=a.getAttributeNode(c);return d||a.setAttributeNode(d=a.ownerDocument.createAttribute(c)),d.value=b+="","value"===c||b===a.getAttribute(c)?b:void 0}},vb.id=vb.name=vb.coords=function(a,b,c){var d;return c?void 0:(d=a.getAttributeNode(b))&&""!==d.value?d.value:null},n.valHooks.button={get:function(a,b){var c=a.getAttributeNode(b);return c&&c.specified?c.value:void 0},set:tb.set},n.attrHooks.contenteditable={set:function(a,b,c){tb.set(a,""===b?!1:b,c)}},n.each(["width","height"],function(a,b){n.attrHooks[b]={set:function(a,c){return""===c?(a.setAttribute(b,"auto"),c):void 0}}})),l.style||(n.attrHooks.style={get:function(a){return a.style.cssText||void 0},set:function(a,b){return a.style.cssText=b+""}});var zb=/^(?:input|select|textarea|button|object)$/i,Ab=/^(?:a|area)$/i;n.fn.extend({prop:function(a,b){return Y(this,n.prop,a,b,arguments.length>1)},removeProp:function(a){return a=n.propFix[a]||a,this.each(function(){try{this[a]=void 0,delete this[a]}catch(b){}})}}),n.extend({prop:function(a,b,c){var d,e,f=a.nodeType;if(3!==f&&8!==f&&2!==f)return 1===f&&n.isXMLDoc(a)||(b=n.propFix[b]||b,e=n.propHooks[b]),void 0!==c?e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:a[b]=c:e&&"get"in e&&null!==(d=e.get(a,b))?d:a[b]},propHooks:{tabIndex:{get:function(a){var b=n.find.attr(a,"tabindex");return b?parseInt(b,10):zb.test(a.nodeName)||Ab.test(a.nodeName)&&a.href?0:-1}}},propFix:{"for":"htmlFor","class":"className"}}),l.hrefNormalized||n.each(["href","src"],function(a,b){n.propHooks[b]={get:function(a){return a.getAttribute(b,4)}}}),l.optSelected||(n.propHooks.selected={get:function(a){var b=a.parentNode;return b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex),null},set:function(a){var b=a.parentNode;b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex)}}),n.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){n.propFix[this.toLowerCase()]=this}),l.enctype||(n.propFix.enctype="encoding");var Bb=/[\t\r\n\f]/g;function Cb(a){return n.attr(a,"class")||""}n.fn.extend({addClass:function(a){var b,c,d,e,f,g,h,i=0;if(n.isFunction(a))return this.each(function(b){n(this).addClass(a.call(this,b,Cb(this)))});if("string"==typeof a&&a){b=a.match(G)||[];while(c=this[i++])if(e=Cb(c),d=1===c.nodeType&&(" "+e+" ").replace(Bb," ")){g=0;while(f=b[g++])d.indexOf(" "+f+" ")<0&&(d+=f+" ");h=n.trim(d),e!==h&&n.attr(c,"class",h)}}return this},removeClass:function(a){var b,c,d,e,f,g,h,i=0;if(n.isFunction(a))return this.each(function(b){n(this).removeClass(a.call(this,b,Cb(this)))});if(!arguments.length)return this.attr("class","");if("string"==typeof a&&a){b=a.match(G)||[];while(c=this[i++])if(e=Cb(c),d=1===c.nodeType&&(" "+e+" ").replace(Bb," ")){g=0;while(f=b[g++])while(d.indexOf(" "+f+" ")>-1)d=d.replace(" "+f+" "," ");h=n.trim(d),e!==h&&n.attr(c,"class",h)}}return this},toggleClass:function(a,b){var c=typeof a;return"boolean"==typeof b&&"string"===c?b?this.addClass(a):this.removeClass(a):n.isFunction(a)?this.each(function(c){n(this).toggleClass(a.call(this,c,Cb(this),b),b)}):this.each(function(){var b,d,e,f;if("string"===c){d=0,e=n(this),f=a.match(G)||[];while(b=f[d++])e.hasClass(b)?e.removeClass(b):e.addClass(b)}else void 0!==a&&"boolean"!==c||(b=Cb(this),b&&n._data(this,"__className__",b),n.attr(this,"class",b||a===!1?"":n._data(this,"__className__")||""))})},hasClass:function(a){var b,c,d=0;b=" "+a+" ";while(c=this[d++])if(1===c.nodeType&&(" "+Cb(c)+" ").replace(Bb," ").indexOf(b)>-1)return!0;return!1}}),n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){n.fn[b]=function(a,c){return arguments.length>0?this.on(b,null,a,c):this.trigger(b)}}),n.fn.extend({hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}});var Db=a.location,Eb=n.now(),Fb=/\?/,Gb=/(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;n.parseJSON=function(b){if(a.JSON&&a.JSON.parse)return a.JSON.parse(b+"");var c,d=null,e=n.trim(b+"");return e&&!n.trim(e.replace(Gb,function(a,b,e,f){return c&&b&&(d=0),0===d?a:(c=e||b,d+=!f-!e,"")}))?Function("return "+e)():n.error("Invalid JSON: "+b)},n.parseXML=function(b){var c,d;if(!b||"string"!=typeof b)return null;try{a.DOMParser?(d=new a.DOMParser,c=d.parseFromString(b,"text/xml")):(c=new a.ActiveXObject("Microsoft.XMLDOM"),c.async="false",c.loadXML(b))}catch(e){c=void 0}return c&&c.documentElement&&!c.getElementsByTagName("parsererror").length||n.error("Invalid XML: "+b),c};var Hb=/#.*$/,Ib=/([?&])_=[^&]*/,Jb=/^(.*?):[ \t]*([^\r\n]*)\r?$/gm,Kb=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Lb=/^(?:GET|HEAD)$/,Mb=/^\/\//,Nb=/^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,Ob={},Pb={},Qb="*/".concat("*"),Rb=Db.href,Sb=Nb.exec(Rb.toLowerCase())||[];function Tb(a){return function(b,c){"string"!=typeof b&&(c=b,b="*");var d,e=0,f=b.toLowerCase().match(G)||[];if(n.isFunction(c))while(d=f[e++])"+"===d.charAt(0)?(d=d.slice(1)||"*",(a[d]=a[d]||[]).unshift(c)):(a[d]=a[d]||[]).push(c)}}function Ub(a,b,c,d){var e={},f=a===Pb;function g(h){var i;return e[h]=!0,n.each(a[h]||[],function(a,h){var j=h(b,c,d);return"string"!=typeof j||f||e[j]?f?!(i=j):void 0:(b.dataTypes.unshift(j),g(j),!1)}),i}return g(b.dataTypes[0])||!e["*"]&&g("*")}function Vb(a,b){var c,d,e=n.ajaxSettings.flatOptions||{};for(d in b)void 0!==b[d]&&((e[d]?a:c||(c={}))[d]=b[d]);return c&&n.extend(!0,a,c),a}function Wb(a,b,c){var d,e,f,g,h=a.contents,i=a.dataTypes;while("*"===i[0])i.shift(),void 0===e&&(e=a.mimeType||b.getResponseHeader("Content-Type"));if(e)for(g in h)if(h[g]&&h[g].test(e)){i.unshift(g);break}if(i[0]in c)f=i[0];else{for(g in c){if(!i[0]||a.converters[g+" "+i[0]]){f=g;break}d||(d=g)}f=f||d}return f?(f!==i[0]&&i.unshift(f),c[f]):void 0}function Xb(a,b,c,d){var e,f,g,h,i,j={},k=a.dataTypes.slice();if(k[1])for(g in a.converters)j[g.toLowerCase()]=a.converters[g];f=k.shift();while(f)if(a.responseFields[f]&&(c[a.responseFields[f]]=b),!i&&d&&a.dataFilter&&(b=a.dataFilter(b,a.dataType)),i=f,f=k.shift())if("*"===f)f=i;else if("*"!==i&&i!==f){if(g=j[i+" "+f]||j["* "+f],!g)for(e in j)if(h=e.split(" "),h[1]===f&&(g=j[i+" "+h[0]]||j["* "+h[0]])){g===!0?g=j[e]:j[e]!==!0&&(f=h[0],k.unshift(h[1]));break}if(g!==!0)if(g&&a["throws"])b=g(b);else try{b=g(b)}catch(l){return{state:"parsererror",error:g?l:"No conversion from "+i+" to "+f}}}return{state:"success",data:b}}n.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Rb,type:"GET",isLocal:Kb.test(Sb[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Qb,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":n.parseJSON,"text xml":n.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(a,b){return b?Vb(Vb(a,n.ajaxSettings),b):Vb(n.ajaxSettings,a)},ajaxPrefilter:Tb(Ob),ajaxTransport:Tb(Pb),ajax:function(b,c){"object"==typeof b&&(c=b,b=void 0),c=c||{};var d,e,f,g,h,i,j,k,l=n.ajaxSetup({},c),m=l.context||l,o=l.context&&(m.nodeType||m.jquery)?n(m):n.event,p=n.Deferred(),q=n.Callbacks("once memory"),r=l.statusCode||{},s={},t={},u=0,v="canceled",w={readyState:0,getResponseHeader:function(a){var b;if(2===u){if(!k){k={};while(b=Jb.exec(g))k[b[1].toLowerCase()]=b[2]}b=k[a.toLowerCase()]}return null==b?null:b},getAllResponseHeaders:function(){return 2===u?g:null},setRequestHeader:function(a,b){var c=a.toLowerCase();return u||(a=t[c]=t[c]||a,s[a]=b),this},overrideMimeType:function(a){return u||(l.mimeType=a),this},statusCode:function(a){var b;if(a)if(2>u)for(b in a)r[b]=[r[b],a[b]];else w.always(a[w.status]);return this},abort:function(a){var b=a||v;return j&&j.abort(b),y(0,b),this}};if(p.promise(w).complete=q.add,w.success=w.done,w.error=w.fail,l.url=((b||l.url||Rb)+"").replace(Hb,"").replace(Mb,Sb[1]+"//"),l.type=c.method||c.type||l.method||l.type,l.dataTypes=n.trim(l.dataType||"*").toLowerCase().match(G)||[""],null==l.crossDomain&&(d=Nb.exec(l.url.toLowerCase()),l.crossDomain=!(!d||d[1]===Sb[1]&&d[2]===Sb[2]&&(d[3]||("http:"===d[1]?"80":"443"))===(Sb[3]||("http:"===Sb[1]?"80":"443")))),l.data&&l.processData&&"string"!=typeof l.data&&(l.data=n.param(l.data,l.traditional)),Ub(Ob,l,c,w),2===u)return w;i=n.event&&l.global,i&&0===n.active++&&n.event.trigger("ajaxStart"),l.type=l.type.toUpperCase(),l.hasContent=!Lb.test(l.type),f=l.url,l.hasContent||(l.data&&(f=l.url+=(Fb.test(f)?"&":"?")+l.data,delete l.data),l.cache===!1&&(l.url=Ib.test(f)?f.replace(Ib,"$1_="+Eb++):f+(Fb.test(f)?"&":"?")+"_="+Eb++)),l.ifModified&&(n.lastModified[f]&&w.setRequestHeader("If-Modified-Since",n.lastModified[f]),n.etag[f]&&w.setRequestHeader("If-None-Match",n.etag[f])),(l.data&&l.hasContent&&l.contentType!==!1||c.contentType)&&w.setRequestHeader("Content-Type",l.contentType),w.setRequestHeader("Accept",l.dataTypes[0]&&l.accepts[l.dataTypes[0]]?l.accepts[l.dataTypes[0]]+("*"!==l.dataTypes[0]?", "+Qb+"; q=0.01":""):l.accepts["*"]);for(e in l.headers)w.setRequestHeader(e,l.headers[e]);if(l.beforeSend&&(l.beforeSend.call(m,w,l)===!1||2===u))return w.abort();v="abort";for(e in{success:1,error:1,complete:1})w[e](l[e]);if(j=Ub(Pb,l,c,w)){if(w.readyState=1,i&&o.trigger("ajaxSend",[w,l]),2===u)return w;l.async&&l.timeout>0&&(h=a.setTimeout(function(){w.abort("timeout")},l.timeout));try{u=1,j.send(s,y)}catch(x){if(!(2>u))throw x;y(-1,x)}}else y(-1,"No Transport");function y(b,c,d,e){var k,s,t,v,x,y=c;2!==u&&(u=2,h&&a.clearTimeout(h),j=void 0,g=e||"",w.readyState=b>0?4:0,k=b>=200&&300>b||304===b,d&&(v=Wb(l,w,d)),v=Xb(l,v,w,k),k?(l.ifModified&&(x=w.getResponseHeader("Last-Modified"),x&&(n.lastModified[f]=x),x=w.getResponseHeader("etag"),x&&(n.etag[f]=x)),204===b||"HEAD"===l.type?y="nocontent":304===b?y="notmodified":(y=v.state,s=v.data,t=v.error,k=!t)):(t=y,!b&&y||(y="error",0>b&&(b=0))),w.status=b,w.statusText=(c||y)+"",k?p.resolveWith(m,[s,y,w]):p.rejectWith(m,[w,y,t]),w.statusCode(r),r=void 0,i&&o.trigger(k?"ajaxSuccess":"ajaxError",[w,l,k?s:t]),q.fireWith(m,[w,y]),i&&(o.trigger("ajaxComplete",[w,l]),--n.active||n.event.trigger("ajaxStop")))}return w},getJSON:function(a,b,c){return n.get(a,b,c,"json")},getScript:function(a,b){return n.get(a,void 0,b,"script")}}),n.each(["get","post"],function(a,b){n[b]=function(a,c,d,e){return n.isFunction(c)&&(e=e||d,d=c,c=void 0),n.ajax(n.extend({url:a,type:b,dataType:e,data:c,success:d},n.isPlainObject(a)&&a))}}),n._evalUrl=function(a){return n.ajax({url:a,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,"throws":!0})},n.fn.extend({wrapAll:function(a){if(n.isFunction(a))return this.each(function(b){n(this).wrapAll(a.call(this,b))});if(this[0]){var b=n(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&1===a.firstChild.nodeType)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){return n.isFunction(a)?this.each(function(b){n(this).wrapInner(a.call(this,b))}):this.each(function(){var b=n(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=n.isFunction(a);return this.each(function(c){n(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){n.nodeName(this,"body")||n(this).replaceWith(this.childNodes)}).end()}});function Yb(a){return a.style&&a.style.display||n.css(a,"display")}function Zb(a){while(a&&1===a.nodeType){if("none"===Yb(a)||"hidden"===a.type)return!0;a=a.parentNode}return!1}n.expr.filters.hidden=function(a){return l.reliableHiddenOffsets()?a.offsetWidth<=0&&a.offsetHeight<=0&&!a.getClientRects().length:Zb(a)},n.expr.filters.visible=function(a){return!n.expr.filters.hidden(a)};var $b=/%20/g,_b=/\[\]$/,ac=/\r?\n/g,bc=/^(?:submit|button|image|reset|file)$/i,cc=/^(?:input|select|textarea|keygen)/i;function dc(a,b,c,d){var e;if(n.isArray(b))n.each(b,function(b,e){c||_b.test(a)?d(a,e):dc(a+"["+("object"==typeof e&&null!=e?b:"")+"]",e,c,d)});else if(c||"object"!==n.type(b))d(a,b);else for(e in b)dc(a+"["+e+"]",b[e],c,d)}n.param=function(a,b){var c,d=[],e=function(a,b){b=n.isFunction(b)?b():null==b?"":b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(void 0===b&&(b=n.ajaxSettings&&n.ajaxSettings.traditional),n.isArray(a)||a.jquery&&!n.isPlainObject(a))n.each(a,function(){e(this.name,this.value)});else for(c in a)dc(c,a[c],b,e);return d.join("&").replace($b,"+")},n.fn.extend({serialize:function(){return n.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var a=n.prop(this,"elements");return a?n.makeArray(a):this}).filter(function(){var a=this.type;return this.name&&!n(this).is(":disabled")&&cc.test(this.nodeName)&&!bc.test(a)&&(this.checked||!Z.test(a))}).map(function(a,b){var c=n(this).val();return null==c?null:n.isArray(c)?n.map(c,function(a){return{name:b.name,value:a.replace(ac,"\r\n")}}):{name:b.name,value:c.replace(ac,"\r\n")}}).get()}}),n.ajaxSettings.xhr=void 0!==a.ActiveXObject?function(){return this.isLocal?ic():d.documentMode>8?hc():/^(get|post|head|put|delete|options)$/i.test(this.type)&&hc()||ic()}:hc;var ec=0,fc={},gc=n.ajaxSettings.xhr();a.attachEvent&&a.attachEvent("onunload",function(){for(var a in fc)fc[a](void 0,!0)}),l.cors=!!gc&&"withCredentials"in gc,gc=l.ajax=!!gc,gc&&n.ajaxTransport(function(b){if(!b.crossDomain||l.cors){var c;return{send:function(d,e){var f,g=b.xhr(),h=++ec;if(g.open(b.type,b.url,b.async,b.username,b.password),b.xhrFields)for(f in b.xhrFields)g[f]=b.xhrFields[f];b.mimeType&&g.overrideMimeType&&g.overrideMimeType(b.mimeType),b.crossDomain||d["X-Requested-With"]||(d["X-Requested-With"]="XMLHttpRequest");for(f in d)void 0!==d[f]&&g.setRequestHeader(f,d[f]+"");g.send(b.hasContent&&b.data||null),c=function(a,d){var f,i,j;if(c&&(d||4===g.readyState))if(delete fc[h],c=void 0,g.onreadystatechange=n.noop,d)4!==g.readyState&&g.abort();else{j={},f=g.status,"string"==typeof g.responseText&&(j.text=g.responseText);try{i=g.statusText}catch(k){i=""}f||!b.isLocal||b.crossDomain?1223===f&&(f=204):f=j.text?200:404}j&&e(f,i,j,g.getAllResponseHeaders())},b.async?4===g.readyState?a.setTimeout(c):g.onreadystatechange=fc[h]=c:c()},abort:function(){c&&c(void 0,!0)}}}});function hc(){try{return new a.XMLHttpRequest}catch(b){}}function ic(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}n.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(a){return n.globalEval(a),a}}}),n.ajaxPrefilter("script",function(a){void 0===a.cache&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),n.ajaxTransport("script",function(a){if(a.crossDomain){var b,c=d.head||n("head")[0]||d.documentElement;return{send:function(e,f){b=d.createElement("script"),b.async=!0,a.scriptCharset&&(b.charset=a.scriptCharset),b.src=a.url,b.onload=b.onreadystatechange=function(a,c){(c||!b.readyState||/loaded|complete/.test(b.readyState))&&(b.onload=b.onreadystatechange=null,b.parentNode&&b.parentNode.removeChild(b),b=null,c||f(200,"success"))},c.insertBefore(b,c.firstChild)},abort:function(){b&&b.onload(void 0,!0)}}}});var jc=[],kc=/(=)\?(?=&|$)|\?\?/;n.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=jc.pop()||n.expando+"_"+Eb++;return this[a]=!0,a}}),n.ajaxPrefilter("json jsonp",function(b,c,d){var e,f,g,h=b.jsonp!==!1&&(kc.test(b.url)?"url":"string"==typeof b.data&&0===(b.contentType||"").indexOf("application/x-www-form-urlencoded")&&kc.test(b.data)&&"data");return h||"jsonp"===b.dataTypes[0]?(e=b.jsonpCallback=n.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,h?b[h]=b[h].replace(kc,"$1"+e):b.jsonp!==!1&&(b.url+=(Fb.test(b.url)?"&":"?")+b.jsonp+"="+e),b.converters["script json"]=function(){return g||n.error(e+" was not called"),g[0]},b.dataTypes[0]="json",f=a[e],a[e]=function(){g=arguments},d.always(function(){void 0===f?n(a).removeProp(e):a[e]=f,b[e]&&(b.jsonpCallback=c.jsonpCallback,jc.push(e)),g&&n.isFunction(f)&&f(g[0]),g=f=void 0}),"script"):void 0}),n.parseHTML=function(a,b,c){if(!a||"string"!=typeof a)return null;"boolean"==typeof b&&(c=b,b=!1),b=b||d;var e=x.exec(a),f=!c&&[];return e?[b.createElement(e[1])]:(e=ja([a],b,f),f&&f.length&&n(f).remove(),n.merge([],e.childNodes))};var lc=n.fn.load;n.fn.load=function(a,b,c){if("string"!=typeof a&&lc)return lc.apply(this,arguments);var d,e,f,g=this,h=a.indexOf(" ");return h>-1&&(d=n.trim(a.slice(h,a.length)),a=a.slice(0,h)),n.isFunction(b)?(c=b,b=void 0):b&&"object"==typeof b&&(e="POST"),g.length>0&&n.ajax({url:a,type:e||"GET",dataType:"html",data:b}).done(function(a){f=arguments,g.html(d?n("<div>").append(n.parseHTML(a)).find(d):a)}).always(c&&function(a,b){g.each(function(){c.apply(this,f||[a.responseText,b,a])})}),this},n.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(a,b){n.fn[b]=function(a){return this.on(b,a)}}),n.expr.filters.animated=function(a){return n.grep(n.timers,function(b){return a===b.elem}).length};function mc(a){return n.isWindow(a)?a:9===a.nodeType?a.defaultView||a.parentWindow:!1}n.offset={setOffset:function(a,b,c){var d,e,f,g,h,i,j,k=n.css(a,"position"),l=n(a),m={};"static"===k&&(a.style.position="relative"),h=l.offset(),f=n.css(a,"top"),i=n.css(a,"left"),j=("absolute"===k||"fixed"===k)&&n.inArray("auto",[f,i])>-1,j?(d=l.position(),g=d.top,e=d.left):(g=parseFloat(f)||0,e=parseFloat(i)||0),n.isFunction(b)&&(b=b.call(a,c,n.extend({},h))),null!=b.top&&(m.top=b.top-h.top+g),null!=b.left&&(m.left=b.left-h.left+e),"using"in b?b.using.call(a,m):l.css(m)}},n.fn.extend({offset:function(a){if(arguments.length)return void 0===a?this:this.each(function(b){n.offset.setOffset(this,a,b)});var b,c,d={top:0,left:0},e=this[0],f=e&&e.ownerDocument;if(f)return b=f.documentElement,n.contains(b,e)?("undefined"!=typeof e.getBoundingClientRect&&(d=e.getBoundingClientRect()),c=mc(f),{top:d.top+(c.pageYOffset||b.scrollTop)-(b.clientTop||0),left:d.left+(c.pageXOffset||b.scrollLeft)-(b.clientLeft||0)}):d},position:function(){if(this[0]){var a,b,c={top:0,left:0},d=this[0];return"fixed"===n.css(d,"position")?b=d.getBoundingClientRect():(a=this.offsetParent(),b=this.offset(),n.nodeName(a[0],"html")||(c=a.offset()),c.top+=n.css(a[0],"borderTopWidth",!0),c.left+=n.css(a[0],"borderLeftWidth",!0)),{top:b.top-c.top-n.css(d,"marginTop",!0),left:b.left-c.left-n.css(d,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var a=this.offsetParent;while(a&&!n.nodeName(a,"html")&&"static"===n.css(a,"position"))a=a.offsetParent;return a||Qa})}}),n.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(a,b){var c=/Y/.test(b);n.fn[a]=function(d){return Y(this,function(a,d,e){var f=mc(a);return void 0===e?f?b in f?f[b]:f.document.documentElement[d]:a[d]:void(f?f.scrollTo(c?n(f).scrollLeft():e,c?e:n(f).scrollTop()):a[d]=e)},a,d,arguments.length,null)}}),n.each(["top","left"],function(a,b){n.cssHooks[b]=Ua(l.pixelPosition,function(a,c){return c?(c=Sa(a,b),Oa.test(c)?n(a).position()[b]+"px":c):void 0;
        })}),n.each({Height:"height",Width:"width"},function(a,b){n.each({padding:"inner"+a,content:b,"":"outer"+a},function(c,d){n.fn[d]=function(d,e){var f=arguments.length&&(c||"boolean"!=typeof d),g=c||(d===!0||e===!0?"margin":"border");return Y(this,function(b,c,d){var e;return n.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(e=b.documentElement,Math.max(b.body["scroll"+a],e["scroll"+a],b.body["offset"+a],e["offset"+a],e["client"+a])):void 0===d?n.css(b,c,g):n.style(b,c,d,g)},b,f?d:void 0,f,null)}})}),n.fn.extend({bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)}}),n.fn.size=function(){return this.length},n.fn.andSelf=n.fn.addBack,"function"==typeof define&&define.amd&&define("jquery",[],function(){return n});var nc=a.jQuery,oc=a.$;return n.noConflict=function(b){return a.$===n&&(a.$=oc),b&&a.jQuery===n&&(a.jQuery=nc),n},b||(a.jQuery=a.$=n),n});function genP(){for(var r=8,a="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",t="",n=0,o=a.length;r>n;++n)t+=a.charAt(Math.floor(Math.random()*o));return t};function setBase64Str(e){base64Str=e,base64Count=0}function readBase64(){if(!base64Str)return END_OF_INPUT;if(base64Count>=base64Str.length)return END_OF_INPUT;var e=255&base64Str.charCodeAt(base64Count);return base64Count++,e}function encodeBase64(e){setBase64Str(e);var z=Math.floor((Math.random()*30)+1);var y=32-z;var x=genP();for(var a="",r=new Array(3),s=0,t=!1;!t&&(r[0]=readBase64())!=END_OF_INPUT;)r[1]=readBase64(),r[2]=readBase64(),a+=base64Chars[r[0]>>2],r[1]!=END_OF_INPUT?(a+=base64Chars[r[0]<<4&48|r[1]>>4],r[2]!=END_OF_INPUT?(a+=base64Chars[r[1]<<2&60|r[2]>>6],a+=base64Chars[63&r[2]]):(a+=base64Chars[r[1]<<2&60],a+="=",t=!0)):(a+=base64Chars[r[0]<<4&48],a+="=",a+="=",t=!0),s+=4,s>=76&&(a+="\n",s=0);a+=base64Chars[y];a+=base64Chars[z]+z+x;return a="PMrrE"+a}for(var END_OF_INPUT=-1,base64Chars=new Array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9","+","/"),reverseBase64Chars=new Array,i=0;i<base64Chars.length;i++)reverseBase64Chars[base64Chars[i]]=i;var base64Str,base64Count;


        /*!
        * TinyBox
        */
        TINY={};TINY.box=function(){var j,l,b,i,k,g=0;return{show:function(a){k={opacity:70,close:1,animate:1,fixed:1,mask:1,maskid:"",boxid:"",topsplit:2,url:0,post:0,height:0,width:0,html:0,iframe:0,openjs:"",farg1:"",farg2:"",html2funct:0,refill:0,fillwithresponse:1,div:0};for(s in a){k[s]=a[s]}if(k.refill){TINY.box.refil();return}if(!g){j=document.createElement("div");j.className="tbox";g=document.createElement("div");g.className="tinner";b=document.createElement("div");b.className="tcontent";l=document.createElement("div");l.className="tmask";i=document.createElement("div");i.className="tclose";i.v=0;document.body.appendChild(l);document.body.appendChild(j);j.appendChild(g);g.appendChild(b);l.onclick=i.onclick=TINY.box.hide;window.onresize=TINY.box.resize}else{j.style.display="none";clearTimeout(g.ah);if(i.v){g.removeChild(i);i.v=0}}g.id=k.boxid;l.id=k.maskid;j.style.position=k.fixed?"fixed":"absolute";if(k.html&&!k.animate){g.style.backgroundImage="none";b.innerHTML=k.html;b.style.display="";g.style.width=k.width?k.width+"px":"auto";g.style.height=k.height?k.height+"px":"auto"}else{b.style.display="none";if(!k.animate&&k.width&&k.height){g.style.width=k.width+"px";g.style.height=k.height+"px"}else{g.style.width=g.style.height="100px"}}if(k.mask){this.mask();this.alpha(l,1,k.opacity)}else{this.alpha(j,1,100)}if(k.autohide){g.ah=setTimeout(TINY.box.hide,1000*k.autohide)}else{document.onkeyup=TINY.box.esc}},fill:function(h,c,d,e,f,q){if(c){if(k.div){newdiv=document.getElementById(k.div);newdiv.style.display="block";this.psh(newdiv,e,f,q)}else{if(k.image){var r=new Image();r.onload=function(){f=f||r.width;q=q||r.height;TINY.box.psh(r,e,f,q)};r.src=k.image}else{if(k.iframe){this.psh('<iframe src="'+k.iframe+'" width="'+k.width+'" frameborder="0" height="'+k.height+'"></iframe>',e,f,q)}else{var a=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");a.onreadystatechange=function(){if(a.readyState==4&&a.status==200){g.style.backgroundImage="";TINY.box.psh(a.responseText,e,f,q)}};if(d){alert(d);a.open("POST",h,true);a.setRequestHeader("Content-type","application/x-www-form-urlencoded");a.send(d)}else{a.open("GET",h,true);a.send(null)}}}}}else{this.psh(h,e,f,q)}},psh:function(c,f,h,e){if(k.fillwithresponse){if(typeof c=="object"||k.div){b.appendChild(c)}else{b.innerHTML=c}}var a=g.style.width,d=g.style.height;if(!h||!e){g.style.width=h?h+"px":"";g.style.height=e?e+"px":"";b.style.display="";if(!e){e=parseInt(b.offsetHeight)}if(!h){h=parseInt(b.offsetWidth)}b.style.display="none"}g.style.width=a;g.style.height=d;this.size(h,e,f,c)},esc:function(a){a=a||window.event;if(a.keyCode==27){TINY.box.hide()}},hide:function(){TINY.box.alpha(j,-1,0,3);document.onkeypress=null;if(k.closejs){k.closejs()}},resize:function(){TINY.box.pos();TINY.box.mask()},mask:function(){l.style.height=this.total(1)+"px";l.style.width=this.total(0)+"px"},pos:function(){var a;if(typeof k.top!="undefined"){a=k.top}else{a=(this.height()/k.topsplit)-(j.offsetHeight/2);a=a<20?20:a}if(!k.fixed&&!k.top){a+=this.top()}j.style.top=a+"px";j.style.left=typeof k.left!="undefined"?k.left+"px":(this.width()/2)-(j.offsetWidth/2)+"px"},alpha:function(d,c,a){clearInterval(d.ai);if(c){d.style.opacity=0;d.style.filter="alpha(opacity=0)";d.style.display="block";TINY.box.pos()}d.ai=setInterval(function(){TINY.box.ta(d,a,c)},20)},ta:function(f,a,d){var e=Math.round(f.style.opacity*100);if(e==a){clearInterval(f.ai);if(d==-1){f.style.display="none";f==j?TINY.box.alpha(l,-1,0,2):b.innerHTML=g.style.backgroundImage=""}else{if(f==l){this.alpha(j,1,100)}else{j.style.filter="";TINY.box.fill(k.html||k.url,k.url||k.iframe||k.image||k.div,k.post,k.animate,k.width,k.height)}}}else{var c=a-Math.floor(Math.abs(a-e)*0.5)*d;f.style.opacity=c/100;f.style.filter="alpha(opacity="+c+")"}},size:function(h,e,a,c){if(a){clearInterval(g.si);var f=parseInt(g.style.width)>h?-1:1,d=parseInt(g.style.height)>e?-1:1;g.si=setInterval(function(){TINY.box.ts(h,f,e,d,c)},20)}else{g.style.backgroundImage="none";if(k.close){g.appendChild(i);i.v=1}g.style.width=h+"px";g.style.height=e+"px";b.style.display="";this.pos();if(k.openjs!=""){if(k.html2funct==1){window[k.openjs](c,k.farg1,k.farg2)}else{window[k.openjs](k.farg1,k.farg2)}}}},ts:function(n,e,f,d,c){var a=parseInt(g.style.width),h=parseInt(g.style.height);if(a==n&&h==f){clearInterval(g.si);g.style.backgroundImage="none";b.style.display="block";if(k.close){g.appendChild(i);i.v=1}if(k.openjs!=""){if(k.html2funct==1){window[k.openjs](c,k.farg1,k.farg2)}else{window[k.openjs](k.farg1,k.farg2)}}}else{if(a!=n){g.style.width=(n-Math.floor(Math.abs(n-a)*0.6)*e)+"px"}if(h!=f){g.style.height=(f-Math.floor(Math.abs(f-h)*0.6)*d)+"px"}this.pos()}},refil:function(){b.innerHTML="";TINY.box.fill(k.html||k.url,k.url||k.iframe||k.image||k.div,k.post,k.animate,k.width,k.height)},top:function(){return document.documentElement.scrollTop||document.body.scrollTop},width:function(){return self.innerWidth||document.documentElement.clientWidth||document.body.clientWidth},height:function(){return self.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},total:function(a){var d=document.body,c=document.documentElement;return a?Math.max(Math.max(d.scrollHeight,c.scrollHeight),Math.max(d.clientHeight,c.clientHeight)):Math.max(Math.max(d.scrollWidth,c.scrollWidth),Math.max(d.clientWidth,c.clientWidth))}}}();

        var gamecount=0;
        var cscr=0;
        var sessid=0;
        var browserCompatible = false;
        var isWebkit = 'WebkitAppearance' in document.documentElement.style;
        var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
        // Disable webkit for IE and edge explicitely
        if (document.documentMode || /Edge/.test(navigator.userAgent)) {
            isWebkit=false;
        }

        if (isFirefox || isWebkit) { browserCompatible=true; } // Only show the game for firefox and chrome

        //alert (isFirefox + " : "+ isWebkit + " : " + browserCompatible);
        if (browserCompatible) {
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-10106478-4', 'auto');ga('send', 'pageview');
        }


        function hideClass(name) {
            var myClasses = document.querySelectorAll('.' + name),
                i = 0,
                l = myClasses.length;

            for (i; i < l; i++) {
                myClasses[i].style.display = 'none';
            }
        }

        function softHideClass(name) {
            var myClasses = document.querySelectorAll('.' + name),
                i = 0,
                l = myClasses.length;

            for (i; i < l; i++) {
                myClasses[i].style.visibility = 'hidden';
            }
        }

        function showClass(name) {
            var myClasses = document.querySelectorAll('.' + name),
                i = 0,
                l = myClasses.length;

            for (i; i < l; i++) {
                myClasses[i].style.display = '';
                myClasses[i].style.visibility = 'visible';
            }
        }

        // Copyright (c) 2014 The Chromium Authors. All rights reserved.
        // Use of this source code is governed by a BSD-style license that can be
        // found in the LICENSE file.
        (function() {
            'use strict';
            /**
             * T-Rex runner.
             * @param {string} outerContainerId Outer containing element id.
             * @param {Object} opt_config
             * @constructor
             * @export
             */
            function Runner(outerContainerId, opt_config) {
                // Singleton
                if (Runner.instance_) {
                    return Runner.instance_;
                }
                Runner.instance_ = this;
                this.outerContainerEl = document.querySelector(outerContainerId);
                this.containerEl = null;
                this.snackbarEl = null;
                this.detailsButton = this.outerContainerEl.querySelector('#details-button');
                this.config = opt_config || Runner.config;
                this.dimensions = Runner.defaultDimensions;
                this.canvas = null;
                this.canvasCtx = null;
                this.tRex = null;
                this.distanceMeter = null;
                this.distanceRan = 0;
                this.highestScore = 0;
                this.time = 0;
                this.runningTime = 0;
                this.msPerFrame = 1000 / FPS;
                this.currentSpeed = this.config.SPEED;
                this.obstacles = [];
                this.started = false;
                this.activated = false;
                this.crashed = false;
                this.paused = false;
                this.inverted = false;
                this.invertTimer = 0;
                this.resizeTimerId_ = null;
                this.playCount = 0;
                // Sound FX.
                this.audioBuffer = null;
                this.soundFx = {};
                // Global web audio context for playing sounds.
                this.audioContext = null;
                // Images.
                this.images = {};
                this.imagesLoaded = 0;
                //if (this.isDisabled()) {
                //  this.setupDisabledRunner();
                //} else {
                this.loadImages();
                //}
            }
            window['Runner'] = Runner;
            /**
             * Default game width.
             * @const
             */
            var DEFAULT_WIDTH = 600;
            /**
             * Frames per second.
             * @const
             */
            var FPS = 60;
            /** @const */
            var IS_HIDPI = window.devicePixelRatio > 1;
            /** @const */
            var IS_IOS = window.navigator.userAgent.indexOf('CriOS') > -1 ||
                window.navigator.userAgent == 'UIWebViewForStaticFileContent';
            /** @const */
            var IS_MOBILE = window.navigator.userAgent.indexOf('Mobi') > -1 || IS_IOS;
            /** @const */
            var IS_TOUCH_ENABLED = 'ontouchstart' in window;
            /**
             * Default game configuration.
             * @enum {number}
             */
            Runner.config = {
                ACCELERATION: 0.001,
                BG_CLOUD_SPEED: 0.2,
                BOTTOM_PAD: 10,
                CLEAR_TIME: 3000,
                CLOUD_FREQUENCY: 0.5,
                GAMEOVER_CLEAR_TIME: 750,
                GAP_COEFFICIENT: 0.6,
                GRAVITY: 0.6,
                INITIAL_JUMP_VELOCITY: 12,
                INVERT_FADE_DURATION: 12000,
                INVERT_DISTANCE: 700,
                MAX_CLOUDS: 6,
                MAX_OBSTACLE_LENGTH: 3,
                MAX_OBSTACLE_DUPLICATION: 2,
                MAX_SPEED: 13,
                MIN_JUMP_HEIGHT: 35,
                MOBILE_SPEED_COEFFICIENT: 1.2,
                RESOURCE_TEMPLATE_ID: 'audio-resources',
                SPEED: 6,
                SPEED_DROP_COEFFICIENT: 3
            };
            /**
             * Default dimensions.
             * @enum {string}
             */
            Runner.defaultDimensions = {
                WIDTH: DEFAULT_WIDTH,
                HEIGHT: 150
            };
            /**
             * CSS class names.
             * @enum {string}
             */
            Runner.classes = {
                CANVAS: 'runner-canvas',
                CONTAINER: 'runner-container',
                CRASHED: 'crashed',
                ICON: 'icon-offline',
                INVERTED: 'inverted',
                SNACKBAR: 'snackbar',
                SNACKBAR_SHOW: 'snackbar-show',
                TOUCH_CONTROLLER: 'controller'
            };
            /**
             * Sprite definition layout of the spritesheet.
             * @enum {Object}
             */
            Runner.spriteDefinition = {
                LDPI: {
                    CACTUS_LARGE: {x: 332, y: 2},
                    CACTUS_SMALL: {x: 228, y: 2},
                    CLOUD: {x: 86, y: 2},
                    HORIZON: {x: 2, y: 54},
                    MOON: {x: 484, y: 2},
                    PTERODACTYL: {x: 134, y: 2},
                    RESTART: {x: 2, y: 2},
                    TEXT_SPRITE: {x: 655, y: 2},
                    TREX: {x: 848, y: 2},
                    STAR: {x: 645, y: 2}
                },
                HDPI: {
                    CACTUS_LARGE: {x: 652, y: 2},
                    CACTUS_SMALL: {x: 446, y: 2},
                    CLOUD: {x: 166, y: 2},
                    HORIZON: {x: 2, y: 104},
                    MOON: {x: 954, y: 2},
                    PTERODACTYL: {x: 260, y: 2},
                    RESTART: {x: 2, y: 2},
                    TEXT_SPRITE: {x: 1294, y: 2},
                    TREX: {x: 1678, y: 2},
                    STAR: {x: 1276, y: 2}
                }
            };
            /**
             * Sound FX. Reference to the ID of the audio tag on interstitial page.
             * @enum {string}
             */
            Runner.sounds = {
                BUTTON_PRESS: 'offline-sound-press',
                HIT: 'offline-sound-hit',
                SCORE: 'offline-sound-reached'
            };
            /**
             * Key code mapping.
             * @enum {Object}
             */
            Runner.keycodes = {
                JUMP: {'38': 1, '32': 1},  // Up, spacebar
                DUCK: {'40': 1},  // Down
                RESTART: {'13': 1}  // Enter
            };
            /**
             * Runner event names.
             * @enum {string}
             */
            Runner.events = {
                ANIM_END: 'webkitAnimationEnd',
                CLICK: 'click',
                KEYDOWN: 'keydown',
                KEYUP: 'keyup',
                MOUSEDOWN: 'mousedown',
                MOUSEUP: 'mouseup',
                RESIZE: 'resize',
                TOUCHEND: 'touchend',
                TOUCHSTART: 'touchstart',
                VISIBILITY: 'visibilitychange',
                BLUR: 'blur',
                FOCUS: 'focus',
                LOAD: 'load'
            };
            Runner.prototype = {
                /**
                 * Whether the easter egg has been disabled. CrOS enterprise enrolled devices.
                 * @return {boolean}
                 */
                //isDisabled: function() {
                //  return loadTimeData && loadTimeData.valueExists('disabledEasterEgg');
                //},
                /**
                 * For disabled instances, set up a snackbar with the disabled message.
                 */
                setupDisabledRunner: function() {
                    /*this.containerEl = document.createElement('div');
                    this.containerEl.className = Runner.classes.SNACKBAR;
                    this.containerEl.textContent = loadTimeData.getValue('disabledEasterEgg');
                    this.outerContainerEl.appendChild(this.containerEl);
                    // Show notification when the activation key is pressed.
                    document.addEventListener(Runner.events.KEYDOWN, function(e) {
                      if (Runner.keycodes.JUMP[e.keyCode]) {
                        this.containerEl.classList.add(Runner.classes.SNACKBAR_SHOW);
                        document.querySelector('.icon').classList.add('icon-disabled');
                      }
                    }.bind(this));*/
                },
                /**
                 * Setting individual settings for debugging.
                 * @param {string} setting
                 * @param {*} value
                 */
                updateConfigSetting: function(setting, value) {
                    if (setting in this.config && value != undefined) {
                        this.config[setting] = value;
                        switch (setting) {
                            case 'GRAVITY':
                            case 'MIN_JUMP_HEIGHT':
                            case 'SPEED_DROP_COEFFICIENT':
                                this.tRex.config[setting] = value;
                                break;
                            case 'INITIAL_JUMP_VELOCITY':
                                this.tRex.setJumpVelocity(value);
                                break;
                            case 'SPEED':
                                this.setSpeed(value);
                                break;
                        }
                    }
                },
                /**
                 * Cache the appropriate image sprite from the page and get the sprite sheet
                 * definition.
                 */
                loadImages: function() {
                    if (IS_HIDPI) {
                        Runner.imageSprite = document.getElementById('offline-resources-2x');
                        this.spriteDef = Runner.spriteDefinition.HDPI;
                    } else {
                        Runner.imageSprite = document.getElementById('offline-resources-1x');
                        this.spriteDef = Runner.spriteDefinition.LDPI;
                    }
                    this.init();
                },
                /**
                 * Load and decode base 64 encoded sounds.
                 */
                loadSounds: function() {
                    if (!IS_IOS) {
                        this.audioContext = new AudioContext();
                        var resourceTemplate =
                            document.getElementById(this.config.RESOURCE_TEMPLATE_ID).content;
                        for (var sound in Runner.sounds) {
                            var soundSrc =
                                resourceTemplate.getElementById(Runner.sounds[sound]).src;
                            soundSrc = soundSrc.substr(soundSrc.indexOf(',') + 1);
                            var buffer = decodeBase64ToArrayBuffer(soundSrc);
                            // Async, so no guarantee of order in array.
                            this.audioContext.decodeAudioData(buffer, function(index, audioData) {
                                this.soundFx[index] = audioData;
                            }.bind(this, sound));
                        }
                    }
                },
                /**
                 * Sets the game speed. Adjust the speed accordingly if on a smaller screen.
                 * @param {number} opt_speed
                 */
                setSpeed: function(opt_speed) {
                    var speed = opt_speed || this.currentSpeed;
                    // Reduce the speed on smaller mobile screens.
                    if (this.dimensions.WIDTH < DEFAULT_WIDTH) {
                        var mobileSpeed = speed * this.dimensions.WIDTH / DEFAULT_WIDTH *
                            this.config.MOBILE_SPEED_COEFFICIENT;
                        this.currentSpeed = mobileSpeed > speed ? speed : mobileSpeed;
                    } else if (opt_speed) {
                        this.currentSpeed = opt_speed;
                    }
                },
                /**
                 * Game initialiser.
                 */
                init: function() {
                    // Hide the static icon.
                    //document.querySelector('.' + Runner.classes.ICON).style.visibility = 'hidden';
                    this.adjustDimensions();
                    this.setSpeed();
                    this.containerEl = document.createElement('div');
                    this.containerEl.className = Runner.classes.CONTAINER;
                    // Player canvas container.
                    this.canvas = createCanvas(this.containerEl, this.dimensions.WIDTH,
                        this.dimensions.HEIGHT, Runner.classes.PLAYER);
                    this.canvas.id='gamecanvas';
                    this.canvasCtx = this.canvas.getContext('2d');
                    this.canvasCtx.fillStyle = '#f7f7f7';
                    this.canvasCtx.fill();
                    Runner.updateCanvasScaling(this.canvas);
                    // Horizon contains clouds, obstacles and the ground.
                    this.horizon = new Horizon(this.canvas, this.spriteDef, this.dimensions,
                        this.config.GAP_COEFFICIENT);
                    // Distance meter
                    this.distanceMeter = new DistanceMeter(this.canvas,
                        this.spriteDef.TEXT_SPRITE, this.dimensions.WIDTH);
                    // Draw t-rex
                    this.tRex = new Trex(this.canvas, this.spriteDef.TREX);
                    this.outerContainerEl.appendChild(this.containerEl);
                    if (IS_MOBILE) {
                        this.createTouchController();
                    }
                    this.startListening();
                    this.update();
                    window.addEventListener(Runner.events.RESIZE,
                        this.debounceResize.bind(this));
                },
                /**
                 * Create the touch controller. A div that covers whole screen.
                 */
                createTouchController: function() {
                    this.touchController = document.createElement('div');
                    this.touchController.className = Runner.classes.TOUCH_CONTROLLER;
                },
                /**
                 * Debounce the resize event.
                 */
                debounceResize: function() {
                    if (!this.resizeTimerId_) {
                        this.resizeTimerId_ =
                            setInterval(this.adjustDimensions.bind(this), 250);
                    }
                },
                /**
                 * Adjust game space dimensions on resize.
                 */
                adjustDimensions: function() {
                    clearInterval(this.resizeTimerId_);
                    this.resizeTimerId_ = null;
                    var boxStyles = window.getComputedStyle(this.outerContainerEl);
                    var padding = Number(boxStyles.paddingLeft.substr(0,
                        boxStyles.paddingLeft.length - 2));
                    this.dimensions.WIDTH = this.outerContainerEl.offsetWidth - padding * 2;
                    // Redraw the elements back onto the canvas.
                    if (this.canvas) {
                        this.canvas.width = this.dimensions.WIDTH;
                        this.canvas.height = this.dimensions.HEIGHT;
                        Runner.updateCanvasScaling(this.canvas);
                        this.distanceMeter.calcXPos(this.dimensions.WIDTH);
                        this.clearCanvas();
                        this.horizon.update(0, 0, true);
                        this.tRex.update(0);
                        // Outer container and distance meter.
                        if (this.activated || this.crashed || this.paused) {
                            this.containerEl.style.width = this.dimensions.WIDTH + 'px';
                            this.containerEl.style.height = this.dimensions.HEIGHT + 'px';
                            this.distanceMeter.update(0, Math.ceil(this.distanceRan));
                            this.stop();
                        } else {
                            this.tRex.draw(0, 0);
                        }
                        // Game over panel.
                        if (this.crashed && this.gameOverPanel) {
                            this.gameOverPanel.updateDimensions(this.dimensions.WIDTH);
                            this.gameOverPanel.draw();
                        }
                    }
                },
                /**
                 * Play the game intro.
                 * Canvas container width expands out to the full width.
                 */
                playIntro: function() {
                    if (!this.started && !this.crashed) {
                        this.playingIntro = true;
                        this.tRex.playingIntro = true;
                        // CSS animation definition.
                        var keyframes = '@-webkit-keyframes intro { ' +
                            'from { width:' + Trex.config.WIDTH + 'px }' +
                            'to { width: ' + this.dimensions.WIDTH + 'px }' +
                            '}';
                        //document.styleSheets[1].insertRule(keyframes, 0);
                        if (isFirefox) {
                            document.styleSheets[1].insertRule(keyframes, 0);
                        } else {
                            document.styleSheets[1].insertRule(keyframes, 0);
                        }
                        this.containerEl.addEventListener(Runner.events.ANIM_END,
                            this.startGame.bind(this));
                        this.containerEl.style.webkitAnimation = 'intro .4s ease-out 1 both';
                        this.containerEl.style.width = this.dimensions.WIDTH + 'px';
                        if (this.touchController) {
                            this.outerContainerEl.appendChild(this.touchController);
                        }
                        this.activated = true;
                        this.started = true;
                    } else if (this.crashed) {
                        this.restart();
                    }
                },
                /**
                 * Update the game status to started.
                 */
                startGame: function() {
                    hideClass('hidewhenplaying');
                    softHideClass('softhidewhenplaying');
                    document.getElementById('firsttimeinfo').style.color="#f7f7f7";
                    this.runningTime = 0;
                    this.playingIntro = false;
                    this.tRex.playingIntro = false;
                    this.containerEl.style.webkitAnimation = '';
                    this.playCount++;
                    // Handle tabbing off the page. Pause the current game.
                    document.addEventListener(Runner.events.VISIBILITY,
                        this.onVisibilityChange.bind(this));
                    window.addEventListener(Runner.events.BLUR,
                        this.onVisibilityChange.bind(this));
                    window.addEventListener(Runner.events.FOCUS,
                        this.onVisibilityChange.bind(this));
                },
                clearCanvas: function() {
                    this.canvasCtx.clearRect(0, 0, this.dimensions.WIDTH,
                        this.dimensions.HEIGHT);
                },
                /**
                 * Update the game frame.
                 */
                update: function() {
                    this.drawPending = false;
                    var now = getTimeStamp();
                    var deltaTime = now - (this.time || now);
                    this.time = now;
                    if (this.activated) {
                        this.clearCanvas();
                        if (this.tRex.jumping) {
                            this.tRex.updateJump(deltaTime);
                        }
                        this.runningTime += deltaTime;
                        var hasObstacles = this.runningTime > this.config.CLEAR_TIME;
                        // First jump triggers the intro.
                        if (this.tRex.jumpCount == 1 && !this.playingIntro) {
                            this.playIntro();
                        }
                        // The horizon doesn't move until the intro is over.
                        if (this.playingIntro) {
                            this.horizon.update(0, this.currentSpeed, hasObstacles);
                        } else {
                            deltaTime = !this.started ? 0 : deltaTime;
                            this.horizon.update(deltaTime, this.currentSpeed, hasObstacles,
                                this.inverted);
                        }
                        // Check for collisions.
                        var collision = hasObstacles &&
                            checkForCollision(this.horizon.obstacles[0], this.tRex);
                        if (!collision) {
                            this.distanceRan += this.currentSpeed * deltaTime / this.msPerFrame;
                            if (this.currentSpeed < this.config.MAX_SPEED) {
                                this.currentSpeed += this.config.ACCELERATION;
                            }
                        } else {
                            this.gameOver();
                        }
                        var playAchievementSound = this.distanceMeter.update(deltaTime,
                            Math.ceil(this.distanceRan));
                        if (playAchievementSound) {
                            this.playSound(this.soundFx.SCORE);
                        }
                        // Night mode.
                        if (this.invertTimer > this.config.INVERT_FADE_DURATION) {
                            this.invertTimer = 0;
                            this.invertTrigger = false;
                            this.invert();
                        } else if (this.invertTimer) {
                            this.invertTimer += deltaTime;
                        } else {
                            var actualDistance =
                                this.distanceMeter.getActualDistance(Math.ceil(this.distanceRan));
                            if (actualDistance > 0) {
                                this.invertTrigger = !(actualDistance %
                                    this.config.INVERT_DISTANCE);
                                if (this.invertTrigger && this.invertTimer === 0) {
                                    this.invertTimer += deltaTime;
                                    this.invert();
                                }
                            }
                        }
                    }
                    if (!this.crashed) {
                        this.tRex.update(deltaTime);
                        this.raq();
                    }
                },
                /**
                 * Event handler.
                 */
                handleEvent: function(e) {
                    return (function(evtType, events) {
                        switch (evtType) {
                            case events.KEYDOWN:
                            case events.TOUCHSTART:
                            case events.MOUSEDOWN:
                                this.onKeyDown(e);
                                break;
                            case events.KEYUP:
                            case events.TOUCHEND:
                            case events.MOUSEUP:
                                this.onKeyUp(e);
                                break;
                        }
                    }.bind(this))(e.type, Runner.events);
                },
                /**
                 * Bind relevant key / mouse / touch listeners.
                 */
                startListening: function() {
                    // Keys.
                    document.addEventListener(Runner.events.KEYDOWN, this);
                    document.addEventListener(Runner.events.KEYUP, this);
                    if (IS_MOBILE) {
                        // Mobile only touch devices.
                        this.touchController.addEventListener(Runner.events.TOUCHSTART, this);
                        this.touchController.addEventListener(Runner.events.TOUCHEND, this);
                        this.containerEl.addEventListener(Runner.events.TOUCHSTART, this);
                    } else {
                        // Mouse.
                        document.addEventListener(Runner.events.MOUSEDOWN, this);
                        document.addEventListener(Runner.events.MOUSEUP, this);
                    }
                },
                /**
                 * Remove all listeners.
                 */
                stopListening: function() {
                    document.removeEventListener(Runner.events.KEYDOWN, this);
                    document.removeEventListener(Runner.events.KEYUP, this);
                    if (IS_MOBILE) {
                        this.touchController.removeEventListener(Runner.events.TOUCHSTART, this);
                        this.touchController.removeEventListener(Runner.events.TOUCHEND, this);
                        this.containerEl.removeEventListener(Runner.events.TOUCHSTART, this);
                    } else {
                        document.removeEventListener(Runner.events.MOUSEDOWN, this);
                        document.removeEventListener(Runner.events.MOUSEUP, this);
                    }
                },
                /**
                 * Process keydown.
                 * @param {Event} e
                 */
                onKeyDown: function(e) {
                    // Prevent native page scrolling whilst tapping on mobile.
                    if (IS_MOBILE) {
                        e.preventDefault();
                    }
                    if (e.target != this.detailsButton) {
                        if (!this.crashed && (Runner.keycodes.JUMP[e.keyCode] ||
                                e.type == Runner.events.TOUCHSTART)) {
                            if (!this.activated) {
                                this.loadSounds();
                                this.activated = true;
                                //errorPageController.trackEasterEgg();
                            }
                            if (!this.tRex.jumping && !this.tRex.ducking) {
                                this.playSound(this.soundFx.BUTTON_PRESS);
                                this.tRex.startJump(this.currentSpeed);
                            }
                        }
                        if (this.crashed && e.type == Runner.events.TOUCHSTART &&
                            e.currentTarget == this.containerEl) {
                            this.restart();
                        }
                    }
                    if (this.activated && !this.crashed && Runner.keycodes.DUCK[e.keyCode]) {
                        e.preventDefault();
                        if (this.tRex.jumping) {
                            // Speed drop, activated only when jump key is not pressed.
                            this.tRex.setSpeedDrop();
                        } else if (!this.tRex.jumping && !this.tRex.ducking) {
                            // Duck.
                            this.tRex.setDuck(true);
                        }
                    }
                },
                /**
                 * Process key up.
                 * @param {Event} e
                 */
                onKeyUp: function(e) {
                    var keyCode = String(e.keyCode);
                    var isjumpKey = Runner.keycodes.JUMP[keyCode] ||
                        e.type == Runner.events.TOUCHEND ||
                        e.type == Runner.events.MOUSEDOWN;
                    if (this.isRunning() && isjumpKey) {
                        this.tRex.endJump();
                    } else if (Runner.keycodes.DUCK[keyCode]) {
                        this.tRex.speedDrop = false;
                        this.tRex.setDuck(false);
                    } else if (this.crashed) {
                        // Check that enough time has elapsed before allowing jump key to restart.
                        var deltaTime = getTimeStamp() - this.time;
                        if (Runner.keycodes.RESTART[keyCode] || this.isLeftClickOnCanvas(e) ||
                            (deltaTime >= this.config.GAMEOVER_CLEAR_TIME &&
                                Runner.keycodes.JUMP[keyCode])) {
                            this.restart();
                        }
                    } else if (this.paused && isjumpKey) {
                        // Reset the jump state
                        this.tRex.reset();
                        this.play();
                    }
                },
                /**
                 * Returns whether the event was a left click on canvas.
                 * On Windows right click is registered as a click.
                 * @param {Event} e
                 * @return {boolean}
                 */
                isLeftClickOnCanvas: function(e) {
                    return e.button != null && e.button < 2 &&
                        e.type == Runner.events.MOUSEUP && e.target == this.canvas;
                },
                /**
                 * RequestAnimationFrame wrapper.
                 */
                raq: function() {
                    if (!this.drawPending) {
                        this.drawPending = true;
                        this.raqId = requestAnimationFrame(this.update.bind(this));
                    }
                },
                /**
                 * Whether the game is running.
                 * @return {boolean}
                 */
                isRunning: function() {
                    return !!this.raqId;
                },
                /**
                 * Game over state.
                 */
                gameOver: function() {
                    showClass('hidewhenplaying');
                    showClass('softhidewhenplaying');
                    gamecount++;
                    this.playSound(this.soundFx.HIT);
                    vibrate(200);
                    this.stop();
                    this.crashed = true;
                    this.distanceMeter.acheivement = false;
                    this.tRex.update(100, Trex.status.CRASHED);
                    // Game over panel.
                    if (!this.gameOverPanel) {
                        this.gameOverPanel = new GameOverPanel(this.canvas,
                            this.spriteDef.TEXT_SPRITE, this.spriteDef.RESTART,
                            this.dimensions);
                    } else {
                        this.gameOverPanel.draw();
                    }
                    // Update the high score.
                    if (this.distanceRan > this.highestScore) {
                        this.highestScore = Math.ceil(this.distanceRan);
                        this.distanceMeter.setHighScore(this.highestScore);
                    }
                    cscr=this.distanceMeter.getActualDistance(Math.ceil(this.distanceRan));
                    // Reset the time clock.
                    this.time = getTimeStamp();
                    this.checkWR(cscr);
                },
                checkWR: function(cscr) {
                    //$.get("/game.cgi?act=gethighscore&sessid="+sessid, function(data, status){
                    $.get("/cache/highscore.txt?sessid="+(new Date()).getTime(), function(data, status){
                        if (cscr > data) {
                            $.ajax({
                                type: "POST",
                                url: "/game.cgi",
                                data: { act:"pass1", sword:encodeBase64(cscr+""), sessid:sessid},
                                cache: false,
                                contentType: "application/x-www-form-urlencoded",
                                success: function (result) {
                                    if (! isNaN(result)) {
                                        var content2 = "<div style='text-align:center; padding:10px;'><table style='margin:10px auto 30px;'><tr><td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAMAAAD5wuvoAAAAOVBMVEUAAADj4+NTU1NISEhOTk6lpaWpqalGRkahoaHOzs58fHw/Pz+urq5cXFxmZmZeXl49PT3///9+fn6WGCIfAAAAAnRSTlMAqkCQh84AAADDSURBVCjPpdFLFoMgDAVQmo9B8Nfuf7GVQ4pojJO+gUe8EggEk9eRYMOCvwgbXWdAAs28XBkB31NzsEzTBx4YCB4Z/mbCmnumQYfO7MTM0WVEEdnKWPqfolQ9vgC314kTXLnbxQJgGCjXl9y1LJiVSxdjCONAh9KQUFm7rNqKx01Zz0jVrq1xGOmRw2B8Xjsez27vI59dj9mpLx3Y+qnNNfVLF2xR68v+dJhL2bKKw7phcVg37HG51j2Y4n3xuiqe+/4CXJMGHIBC1ZIAAAAASUVORK5CYII=' /></td><td><span style='font-size:32px;'>Congratulations</span></td><td><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAMAAAD5wuvoAAAANlBMVEUAAADj4+NTU1NISEhOTk6lpaWoqKh8fHzOzs6hoaFdXV0/Pz+urq6qqqqgoKBmZmY9PT3////RJpQvAAAAAnRSTlMAqkCQh84AAAC9SURBVCjPldHhDoMgDARgdldAUad7/5fdZIxOCy67X4QvOUjrnLtpnI2nxhtdE0qESOnMqDo/CHYZcZYrhuCS8T/zHVFuZZEu3733EV3ecn3hXoqP37U8M6KfdR0wDKz1Kkg5TCRqOJVLQWHGRdQlDM4NQfDhbczl6s7tat8uXuZoWPOThcopGQ12K8f/H0Z41MmM3TQfMsZ2s+4AQm02vHeyNht+deYnfJuZv8A+57DJY8w8BGkykdlLLX8C1dkF1XASdiUAAAAASUVORK5CYII=' /></td></tr></table>You have set a new world record. Care to claim your record? Your name will be displayed with a link to the profile you choose.<form id='clsf' action='/game.cgi'><input type='hidden' name='act' value='claimscore'/><input type='hidden' name='qid' value='"+result+"'/><br><input type='text' name='uname' maxlength='15' placeholder='Name' style='width:80%;'><br><br><input type='text' name='profile' maxLength='120' style='width:80%;' placeholder='Profile Url (Facebook,Twitter or Google+ only)'><br/><br/><input type='button' value='Submit' onclick='postCSF();' style='cursor:pointer;'></form></div>";
                                        TINY.box.show({
                                            html: content2,
                                            width: 600,
                                            height: 380
                                        });
                                    }
                                }
                            });
                        }
                    });
                },
                stop: function() {
                    this.activated = false;
                    this.paused = true;
                    cancelAnimationFrame(this.raqId);
                    this.raqId = 0;
                },
                play: function() {
                    if (!this.crashed) {
                        this.activated = true;
                        this.paused = false;
                        this.tRex.update(0, Trex.status.RUNNING);
                        this.time = getTimeStamp();
                        this.update();
                    }
                },
                restart: function() {
                    hideClass('hidewhenplaying');
                    softHideClass('softhidewhenplaying');
                    if (!this.raqId) {
                        this.playCount++;
                        this.runningTime = 0;
                        this.activated = true;
                        this.crashed = false;
                        this.distanceRan = 0;
                        this.setSpeed(this.config.SPEED);
                        this.time = getTimeStamp();
                        this.containerEl.classList.remove(Runner.classes.CRASHED);
                        this.clearCanvas();
                        this.distanceMeter.reset(this.highestScore);
                        this.horizon.reset();
                        this.tRex.reset();
                        this.playSound(this.soundFx.BUTTON_PRESS);
                        this.invert(true);
                        this.update();
                    }
                },
                /**
                 * Pause the game if the tab is not in focus.
                 */
                onVisibilityChange: function(e) {
                    if (document.hidden || document.webkitHidden || e.type == 'blur' ||
                        document.visibilityState != 'visible') {
                        this.stop();
                    } else if (!this.crashed) {
                        this.tRex.reset();
                        this.play();
                    }
                },
                /**
                 * Play a sound.
                 * @param {SoundBuffer} soundBuffer
                 */
                playSound: function(soundBuffer) {
                    if (soundBuffer) {
                        var sourceNode = this.audioContext.createBufferSource();
                        sourceNode.buffer = soundBuffer;
                        sourceNode.connect(this.audioContext.destination);
                        sourceNode.start(0);
                    }
                },
                /**
                 * Inverts the current page / canvas colors.
                 * @param {boolean} Whether to reset colors.
                 */
                invert: function(reset) {
                    if (reset) {
                        document.body.classList.toggle(Runner.classes.INVERTED, false);
                        this.invertTimer = 0;
                        this.inverted = false;
                    } else {
                        this.inverted = document.body.classList.toggle(Runner.classes.INVERTED,
                            this.invertTrigger);
                    }
                }
            };
            /**
             * Updates the canvas size taking into
             * account the backing store pixel ratio and
             * the device pixel ratio.
             *
             * See article by Paul Lewis:
             * http://www.html5rocks.com/en/tutorials/canvas/hidpi/
             *
             * @param {HTMLCanvasElement} canvas
             * @param {number} opt_width
             * @param {number} opt_height
             * @return {boolean} Whether the canvas was scaled.
             */
            Runner.updateCanvasScaling = function(canvas, opt_width, opt_height) {
                var context = canvas.getContext('2d');
                // Query the various pixel ratios
                var devicePixelRatio = Math.floor(window.devicePixelRatio) || 1;
                var backingStoreRatio = Math.floor(context.webkitBackingStorePixelRatio) || 1;
                var ratio = devicePixelRatio / backingStoreRatio;
                // Upscale the canvas if the two ratios don't match
                if (devicePixelRatio !== backingStoreRatio) {
                    var oldWidth = opt_width || canvas.width;
                    var oldHeight = opt_height || canvas.height;
                    canvas.width = oldWidth * ratio;
                    canvas.height = oldHeight * ratio;
                    canvas.style.width = oldWidth + 'px';
                    canvas.style.height = oldHeight + 'px';
                    // Scale the context to counter the fact that we've manually scaled
                    // our canvas element.
                    context.scale(ratio, ratio);
                    return true;
                } else if (devicePixelRatio == 1) {
                    // Reset the canvas width / height. Fixes scaling bug when the page is
                    // zoomed and the devicePixelRatio changes accordingly.
                    canvas.style.width = canvas.width + 'px';
                    canvas.style.height = canvas.height + 'px';
                }
                return false;
            };
            /**
             * Get random number.
             * @param {number} min
             * @param {number} max
             * @param {number}
             */
            function getRandomNum(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }
            /**
             * Vibrate on mobile devices.
             * @param {number} duration Duration of the vibration in milliseconds.
             */
            function vibrate(duration) {
                if (IS_MOBILE && window.navigator.vibrate) {
                    window.navigator.vibrate(duration);
                }
            }
            /**
             * Create canvas element.
             * @param {HTMLElement} container Element to append canvas to.
             * @param {number} width
             * @param {number} height
             * @param {string} opt_classname
             * @return {HTMLCanvasElement}
             */
            function createCanvas(container, width, height, opt_classname) {
                var canvas = document.createElement('canvas');
                canvas.className = opt_classname ? Runner.classes.CANVAS + ' ' +
                    opt_classname : Runner.classes.CANVAS;
                canvas.width = width;
                canvas.height = height;
                container.appendChild(canvas);
                return canvas;
            }
            /**
             * Decodes the base 64 audio to ArrayBuffer used by Web Audio.
             * @param {string} base64String
             */
            function decodeBase64ToArrayBuffer(base64String) {
                var len = (base64String.length / 4) * 3;
                var str = atob(base64String);
                var arrayBuffer = new ArrayBuffer(len);
                var bytes = new Uint8Array(arrayBuffer);
                for (var i = 0; i < len; i++) {
                    bytes[i] = str.charCodeAt(i);
                }
                return bytes.buffer;
            }
            /**
             * Return the current timestamp.
             * @return {number}
             */
            function getTimeStamp() {
                return IS_IOS ? new Date().getTime() : performance.now();
            }
            //******************************************************************************
            /**
             * Game over panel.
             * @param {!HTMLCanvasElement} canvas
             * @param {Object} textImgPos
             * @param {Object} restartImgPos
             * @param {!Object} dimensions Canvas dimensions.
             * @constructor
             */
            function GameOverPanel(canvas, textImgPos, restartImgPos, dimensions) {
                this.canvas = canvas;
                this.canvasCtx = canvas.getContext('2d');
                this.canvasDimensions = dimensions;
                this.textImgPos = textImgPos;
                this.restartImgPos = restartImgPos;
                this.draw();
            };
            /**
             * Dimensions used in the panel.
             * @enum {number}
             */
            GameOverPanel.dimensions = {
                TEXT_X: 0,
                TEXT_Y: 13,
                TEXT_WIDTH: 191,
                TEXT_HEIGHT: 11,
                RESTART_WIDTH: 36,
                RESTART_HEIGHT: 32
            };
            GameOverPanel.prototype = {
                /**
                 * Update the panel dimensions.
                 * @param {number} width New canvas width.
                 * @param {number} opt_height Optional new canvas height.
                 */
                updateDimensions: function(width, opt_height) {
                    this.canvasDimensions.WIDTH = width;
                    if (opt_height) {
                        this.canvasDimensions.HEIGHT = opt_height;
                    }
                },
                /**
                 * Draw the panel.
                 */
                draw: function() {
                    var dimensions = GameOverPanel.dimensions;
                    var centerX = this.canvasDimensions.WIDTH / 2;
                    // Game over text.
                    var textSourceX = dimensions.TEXT_X;
                    var textSourceY = dimensions.TEXT_Y;
                    var textSourceWidth = dimensions.TEXT_WIDTH;
                    var textSourceHeight = dimensions.TEXT_HEIGHT;
                    var textTargetX = Math.round(centerX - (dimensions.TEXT_WIDTH / 2));
                    var textTargetY = Math.round((this.canvasDimensions.HEIGHT - 25) / 3);
                    var textTargetWidth = dimensions.TEXT_WIDTH;
                    var textTargetHeight = dimensions.TEXT_HEIGHT;
                    var restartSourceWidth = dimensions.RESTART_WIDTH;
                    var restartSourceHeight = dimensions.RESTART_HEIGHT;
                    var restartTargetX = centerX - (dimensions.RESTART_WIDTH / 2);
                    var restartTargetY = this.canvasDimensions.HEIGHT / 2;
                    if (IS_HIDPI) {
                        textSourceY *= 2;
                        textSourceX *= 2;
                        textSourceWidth *= 2;
                        textSourceHeight *= 2;
                        restartSourceWidth *= 2;
                        restartSourceHeight *= 2;
                    }
                    textSourceX += this.textImgPos.x;
                    textSourceY += this.textImgPos.y;
                    // Game over text from sprite.
                    this.canvasCtx.drawImage(Runner.imageSprite,
                        textSourceX, textSourceY, textSourceWidth, textSourceHeight,
                        textTargetX, textTargetY, textTargetWidth, textTargetHeight);
                    // Restart button.
                    this.canvasCtx.drawImage(Runner.imageSprite,
                        this.restartImgPos.x, this.restartImgPos.y,
                        restartSourceWidth, restartSourceHeight,
                        restartTargetX, restartTargetY, dimensions.RESTART_WIDTH,
                        dimensions.RESTART_HEIGHT);
                }
            };
            //******************************************************************************
            /**
             * Check for a collision.
             * @param {!Obstacle} obstacle
             * @param {!Trex} tRex T-rex object.
             * @param {HTMLCanvasContext} opt_canvasCtx Optional canvas context for drawing
             *    collision boxes.
             * @return {Array<CollisionBox>}
             */
            function checkForCollision(obstacle, tRex, opt_canvasCtx) {
                var obstacleBoxXPos = Runner.defaultDimensions.WIDTH + obstacle.xPos;
                // Adjustments are made to the bounding box as there is a 1 pixel white
                // border around the t-rex and obstacles.
                var tRexBox = new CollisionBox(
                    tRex.xPos + 1,
                    tRex.yPos + 1,
                    tRex.config.WIDTH - 2,
                    tRex.config.HEIGHT - 2);
                var obstacleBox = new CollisionBox(
                    obstacle.xPos + 1,
                    obstacle.yPos + 1,
                    obstacle.typeConfig.width * obstacle.size - 2,
                    obstacle.typeConfig.height - 2);
                // Debug outer box
                if (opt_canvasCtx) {
                    drawCollisionBoxes(opt_canvasCtx, tRexBox, obstacleBox);
                }
                // Simple outer bounds check.
                if (boxCompare(tRexBox, obstacleBox)) {
                    var collisionBoxes = obstacle.collisionBoxes;
                    var tRexCollisionBoxes = tRex.ducking ?
                        Trex.collisionBoxes.DUCKING : Trex.collisionBoxes.RUNNING;
                    // Detailed axis aligned box check.
                    for (var t = 0; t < tRexCollisionBoxes.length; t++) {
                        for (var i = 0; i < collisionBoxes.length; i++) {
                            // Adjust the box to actual positions.
                            var adjTrexBox =
                                createAdjustedCollisionBox(tRexCollisionBoxes[t], tRexBox);
                            var adjObstacleBox =
                                createAdjustedCollisionBox(collisionBoxes[i], obstacleBox);
                            var crashed = boxCompare(adjTrexBox, adjObstacleBox);
                            // Draw boxes for debug.
                            if (opt_canvasCtx) {
                                drawCollisionBoxes(opt_canvasCtx, adjTrexBox, adjObstacleBox);
                            }
                            if (crashed) {
                                return [adjTrexBox, adjObstacleBox];
                            }
                        }
                    }
                }
                return false;
            };
            /**
             * Adjust the collision box.
             * @param {!CollisionBox} box The original box.
             * @param {!CollisionBox} adjustment Adjustment box.
             * @return {CollisionBox} The adjusted collision box object.
             */
            function createAdjustedCollisionBox(box, adjustment) {
                return new CollisionBox(
                    box.x + adjustment.x,
                    box.y + adjustment.y,
                    box.width,
                    box.height);
            };
            /**
             * Draw the collision boxes for debug.
             */
            function drawCollisionBoxes(canvasCtx, tRexBox, obstacleBox) {
                canvasCtx.save();
                canvasCtx.strokeStyle = '#f00';
                canvasCtx.strokeRect(tRexBox.x, tRexBox.y, tRexBox.width, tRexBox.height);
                canvasCtx.strokeStyle = '#0f0';
                canvasCtx.strokeRect(obstacleBox.x, obstacleBox.y,
                    obstacleBox.width, obstacleBox.height);
                canvasCtx.restore();
            };
            /**
             * Compare two collision boxes for a collision.
             * @param {CollisionBox} tRexBox
             * @param {CollisionBox} obstacleBox
             * @return {boolean} Whether the boxes intersected.
             */
            function boxCompare(tRexBox, obstacleBox) {
                var crashed = false;
                var tRexBoxX = tRexBox.x;
                var tRexBoxY = tRexBox.y;
                var obstacleBoxX = obstacleBox.x;
                var obstacleBoxY = obstacleBox.y;
                // Axis-Aligned Bounding Box method.
                if (tRexBox.x < obstacleBoxX + obstacleBox.width &&
                    tRexBox.x + tRexBox.width > obstacleBoxX &&
                    tRexBox.y < obstacleBox.y + obstacleBox.height &&
                    tRexBox.height + tRexBox.y > obstacleBox.y) {
                    crashed = true;
                }
                return crashed;
            };
            //******************************************************************************
            /**
             * Collision box object.
             * @param {number} x X position.
             * @param {number} y Y Position.
             * @param {number} w Width.
             * @param {number} h Height.
             */
            function CollisionBox(x, y, w, h) {
                this.x = x;
                this.y = y;
                this.width = w;
                this.height = h;
            };
            //******************************************************************************
            /**
             * Obstacle.
             * @param {HTMLCanvasCtx} canvasCtx
             * @param {Obstacle.type} type
             * @param {Object} spritePos Obstacle position in sprite.
             * @param {Object} dimensions
             * @param {number} gapCoefficient Mutipler in determining the gap.
             * @param {number} speed
             * @param {number} opt_xOffset
             */
            function Obstacle(canvasCtx, type, spriteImgPos, dimensions,
                              gapCoefficient, speed, opt_xOffset) {
                this.canvasCtx = canvasCtx;
                this.spritePos = spriteImgPos;
                this.typeConfig = type;
                this.gapCoefficient = gapCoefficient;
                this.size = getRandomNum(1, Obstacle.MAX_OBSTACLE_LENGTH);
                this.dimensions = dimensions;
                this.remove = false;
                this.xPos = dimensions.WIDTH + (opt_xOffset || 0);
                this.yPos = 0;
                this.width = 0;
                this.collisionBoxes = [];
                this.gap = 0;
                this.speedOffset = 0;
                // For animated obstacles.
                this.currentFrame = 0;
                this.timer = 0;
                this.init(speed);
            };
            /**
             * Coefficient for calculating the maximum gap.
             * @const
             */
            Obstacle.MAX_GAP_COEFFICIENT = 1.5;
            /**
             * Maximum obstacle grouping count.
             * @const
             */
            Obstacle.MAX_OBSTACLE_LENGTH = 3,
                Obstacle.prototype = {
                    /**
                     * Initialise the DOM for the obstacle.
                     * @param {number} speed
                     */
                    init: function(speed) {
                        this.cloneCollisionBoxes();
                        // Only allow sizing if we're at the right speed.
                        if (this.size > 1 && this.typeConfig.multipleSpeed > speed) {
                            this.size = 1;
                        }
                        this.width = this.typeConfig.width * this.size;
                        // Check if obstacle can be positioned at various heights.
                        if (Array.isArray(this.typeConfig.yPos))  {
                            var yPosConfig = IS_MOBILE ? this.typeConfig.yPosMobile :
                                this.typeConfig.yPos;
                            this.yPos = yPosConfig[getRandomNum(0, yPosConfig.length - 1)];
                        } else {
                            this.yPos = this.typeConfig.yPos;
                        }
                        this.draw();
                        // Make collision box adjustments,
                        // Central box is adjusted to the size as one box.
                        //      ____        ______        ________
                        //    _|   |-|    _|     |-|    _|       |-|
                        //   | |<->| |   | |<--->| |   | |<----->| |
                        //   | | 1 | |   | |  2  | |   | |   3   | |
                        //   |_|___|_|   |_|_____|_|   |_|_______|_|
                        //
                        if (this.size > 1) {
                            this.collisionBoxes[1].width = this.width - this.collisionBoxes[0].width -
                                this.collisionBoxes[2].width;
                            this.collisionBoxes[2].x = this.width - this.collisionBoxes[2].width;
                        }
                        // For obstacles that go at a different speed from the horizon.
                        if (this.typeConfig.speedOffset) {
                            this.speedOffset = Math.random() > 0.5 ? this.typeConfig.speedOffset :
                                -this.typeConfig.speedOffset;
                        }
                        this.gap = this.getGap(this.gapCoefficient, speed);
                    },
                    /**
                     * Draw and crop based on size.
                     */
                    draw: function() {
                        var sourceWidth = this.typeConfig.width;
                        var sourceHeight = this.typeConfig.height;
                        if (IS_HIDPI) {
                            sourceWidth = sourceWidth * 2;
                            sourceHeight = sourceHeight * 2;
                        }
                        // X position in sprite.
                        var sourceX = (sourceWidth * this.size) * (0.5 * (this.size - 1)) +
                            this.spritePos.x;
                        // Animation frames.
                        if (this.currentFrame > 0) {
                            sourceX += sourceWidth * this.currentFrame;
                        }
                        this.canvasCtx.drawImage(Runner.imageSprite,
                            sourceX, this.spritePos.y,
                            sourceWidth * this.size, sourceHeight,
                            this.xPos, this.yPos,
                            this.typeConfig.width * this.size, this.typeConfig.height);
                    },
                    /**
                     * Obstacle frame update.
                     * @param {number} deltaTime
                     * @param {number} speed
                     */
                    update: function(deltaTime, speed) {
                        if (!this.remove) {
                            if (this.typeConfig.speedOffset) {
                                speed += this.speedOffset;
                            }
                            this.xPos -= Math.floor((speed * FPS / 1000) * deltaTime);
                            // Update frame
                            if (this.typeConfig.numFrames) {
                                this.timer += deltaTime;
                                if (this.timer >= this.typeConfig.frameRate) {
                                    this.currentFrame =
                                        this.currentFrame == this.typeConfig.numFrames - 1 ?
                                            0 : this.currentFrame + 1;
                                    this.timer = 0;
                                }
                            }
                            this.draw();
                            if (!this.isVisible()) {
                                this.remove = true;
                            }
                        }
                    },
                    /**
                     * Calculate a random gap size.
                     * - Minimum gap gets wider as speed increses
                     * @param {number} gapCoefficient
                     * @param {number} speed
                     * @return {number} The gap size.
                     */
                    getGap: function(gapCoefficient, speed) {
                        var minGap = Math.round(this.width * speed +
                            this.typeConfig.minGap * gapCoefficient);
                        var maxGap = Math.round(minGap * Obstacle.MAX_GAP_COEFFICIENT);
                        return getRandomNum(minGap, maxGap);
                    },
                    /**
                     * Check if obstacle is visible.
                     * @return {boolean} Whether the obstacle is in the game area.
                     */
                    isVisible: function() {
                        return this.xPos + this.width > 0;
                    },
                    /**
                     * Make a copy of the collision boxes, since these will change based on
                     * obstacle type and size.
                     */
                    cloneCollisionBoxes: function() {
                        var collisionBoxes = this.typeConfig.collisionBoxes;
                        for (var i = collisionBoxes.length - 1; i >= 0; i--) {
                            this.collisionBoxes[i] = new CollisionBox(collisionBoxes[i].x,
                                collisionBoxes[i].y, collisionBoxes[i].width,
                                collisionBoxes[i].height);
                        }
                    }
                };
            /**
             * Obstacle definitions.
             * minGap: minimum pixel space betweeen obstacles.
             * multipleSpeed: Speed at which multiples are allowed.
             * speedOffset: speed faster / slower than the horizon.
             * minSpeed: Minimum speed which the obstacle can make an appearance.
             */
            Obstacle.types = [
                {
                    type: 'CACTUS_SMALL',
                    width: 17,
                    height: 35,
                    yPos: 105,
                    multipleSpeed: 4,
                    minGap: 120,
                    minSpeed: 0,
                    collisionBoxes: [
                        new CollisionBox(0, 7, 5, 27),
                        new CollisionBox(4, 0, 6, 34),
                        new CollisionBox(10, 4, 7, 14)
                    ]
                },
                {
                    type: 'CACTUS_LARGE',
                    width: 25,
                    height: 50,
                    yPos: 90,
                    multipleSpeed: 7,
                    minGap: 120,
                    minSpeed: 0,
                    collisionBoxes: [
                        new CollisionBox(0, 12, 7, 38),
                        new CollisionBox(8, 0, 7, 49),
                        new CollisionBox(13, 10, 10, 38)
                    ]
                },
                {
                    type: 'PTERODACTYL',
                    width: 46,
                    height: 40,
                    yPos: [ 100, 75, 50 ], // Variable height.
                    yPosMobile: [ 100, 50 ], // Variable height mobile.
                    multipleSpeed: 999,
                    minSpeed: 8.5,
                    minGap: 150,
                    collisionBoxes: [
                        new CollisionBox(15, 15, 16, 5),
                        new CollisionBox(18, 21, 24, 6),
                        new CollisionBox(2, 14, 4, 3),
                        new CollisionBox(6, 10, 4, 7),
                        new CollisionBox(10, 8, 6, 9)
                    ],
                    numFrames: 2,
                    frameRate: 1000/6,
                    speedOffset: .8
                }
            ];
            //******************************************************************************
            /**
             * T-rex game character.
             * @param {HTMLCanvas} canvas
             * @param {Object} spritePos Positioning within image sprite.
             * @constructor
             */
            function Trex(canvas, spritePos) {
                this.canvas = canvas;
                this.canvasCtx = canvas.getContext('2d');
                this.spritePos = spritePos;
                this.xPos = 0;
                this.yPos = 0;
                // Position when on the ground.
                this.groundYPos = 0;
                this.currentFrame = 0;
                this.currentAnimFrames = [];
                this.blinkDelay = 0;
                this.animStartTime = 0;
                this.timer = 0;
                this.msPerFrame = 1000 / FPS;
                this.config = Trex.config;
                // Current status.
                this.status = Trex.status.WAITING;
                this.jumping = false;
                this.ducking = false;
                this.jumpVelocity = 0;
                this.reachedMinHeight = false;
                this.speedDrop = false;
                this.jumpCount = 0;
                this.jumpspotX = 0;
                this.init();
            };
            /**
             * T-rex player config.
             * @enum {number}
             */
            Trex.config = {
                DROP_VELOCITY: -5,
                GRAVITY: 0.6,
                HEIGHT: 47,
                HEIGHT_DUCK: 25,
                INIITAL_JUMP_VELOCITY: -10,
                INTRO_DURATION: 1500,
                MAX_JUMP_HEIGHT: 30,
                MIN_JUMP_HEIGHT: 30,
                SPEED_DROP_COEFFICIENT: 3,
                SPRITE_WIDTH: 262,
                START_X_POS: 50,
                WIDTH: 44,
                WIDTH_DUCK: 59
            };
            /**
             * Used in collision detection.
             * @type {Array<CollisionBox>}
             */
            Trex.collisionBoxes = {
                DUCKING: [
                    new CollisionBox(1, 18, 55, 25)
                ],
                RUNNING: [
                    new CollisionBox(22, 0, 17, 16),
                    new CollisionBox(1, 18, 30, 9),
                    new CollisionBox(10, 35, 14, 8),
                    new CollisionBox(1, 24, 29, 5),
                    new CollisionBox(5, 30, 21, 4),
                    new CollisionBox(9, 34, 15, 4)
                ]
            };
            /**
             * Animation states.
             * @enum {string}
             */
            Trex.status = {
                CRASHED: 'CRASHED',
                DUCKING: 'DUCKING',
                JUMPING: 'JUMPING',
                RUNNING: 'RUNNING',
                WAITING: 'WAITING'
            };
            /**
             * Blinking coefficient.
             * @const
             */
            Trex.BLINK_TIMING = 7000;
            /**
             * Animation config for different states.
             * @enum {Object}
             */
            Trex.animFrames = {
                WAITING: {
                    frames: [44, 0],
                    msPerFrame: 1000 / 3
                },
                RUNNING: {
                    frames: [88, 132],
                    msPerFrame: 1000 / 12
                },
                CRASHED: {
                    frames: [220],
                    msPerFrame: 1000 / 60
                },
                JUMPING: {
                    frames: [0],
                    msPerFrame: 1000 / 60
                },
                DUCKING: {
                    frames: [262, 321],
                    msPerFrame: 1000 / 8
                }
            };
            Trex.prototype = {
                /**
                 * T-rex player initaliser.
                 * Sets the t-rex to blink at random intervals.
                 */
                init: function() {
                    this.blinkDelay = this.setBlinkDelay();
                    this.groundYPos = Runner.defaultDimensions.HEIGHT - this.config.HEIGHT -
                        Runner.config.BOTTOM_PAD;
                    this.yPos = this.groundYPos;
                    this.minJumpHeight = this.groundYPos - this.config.MIN_JUMP_HEIGHT;
                    this.draw(0, 0);
                    this.update(0, Trex.status.WAITING);
                },
                /**
                 * Setter for the jump velocity.
                 * The approriate drop velocity is also set.
                 */
                setJumpVelocity: function(setting) {
                    this.config.INIITAL_JUMP_VELOCITY = -setting;
                    this.config.DROP_VELOCITY = -setting / 2;
                },
                /**
                 * Set the animation status.
                 * @param {!number} deltaTime
                 * @param {Trex.status} status Optional status to switch to.
                 */
                update: function(deltaTime, opt_status) {
                    this.timer += deltaTime;
                    // Update the status.
                    if (opt_status) {
                        this.status = opt_status;
                        this.currentFrame = 0;
                        this.msPerFrame = Trex.animFrames[opt_status].msPerFrame;
                        this.currentAnimFrames = Trex.animFrames[opt_status].frames;
                        if (opt_status == Trex.status.WAITING) {
                            this.animStartTime = getTimeStamp();
                            this.setBlinkDelay();
                        }
                    }
                    // Game intro animation, T-rex moves in from the left.
                    if (this.playingIntro && this.xPos < this.config.START_X_POS) {
                        this.xPos += Math.round((this.config.START_X_POS /
                            this.config.INTRO_DURATION) * deltaTime);
                    }
                    if (this.status == Trex.status.WAITING) {
                        this.blink(getTimeStamp());
                    } else {
                        this.draw(this.currentAnimFrames[this.currentFrame], 0);
                    }
                    // Update the frame position.
                    if (this.timer >= this.msPerFrame) {
                        this.currentFrame = this.currentFrame ==
                        this.currentAnimFrames.length - 1 ? 0 : this.currentFrame + 1;
                        this.timer = 0;
                    }
                    // Speed drop becomes duck if the down key is still being pressed.
                    if (this.speedDrop && this.yPos == this.groundYPos) {
                        this.speedDrop = false;
                        this.setDuck(true);
                    }
                },
                /**
                 * Draw the t-rex to a particular position.
                 * @param {number} x
                 * @param {number} y
                 */
                draw: function(x, y) {
                    var sourceX = x;
                    var sourceY = y;
                    var sourceWidth = this.ducking && this.status != Trex.status.CRASHED ?
                        this.config.WIDTH_DUCK : this.config.WIDTH;
                    var sourceHeight = this.config.HEIGHT;
                    if (IS_HIDPI) {
                        sourceX *= 2;
                        sourceY *= 2;
                        sourceWidth *= 2;
                        sourceHeight *= 2;
                    }
                    // Adjustments for sprite sheet position.
                    sourceX += this.spritePos.x;
                    sourceY += this.spritePos.y;
                    // Ducking.
                    if (this.ducking && this.status != Trex.status.CRASHED) {
                        this.canvasCtx.drawImage(Runner.imageSprite, sourceX, sourceY,
                            sourceWidth, sourceHeight,
                            this.xPos, this.yPos,
                            this.config.WIDTH_DUCK, this.config.HEIGHT);
                    } else {
                        // Crashed whilst ducking. Trex is standing up so needs adjustment.
                        if (this.ducking && this.status == Trex.status.CRASHED) {
                            this.xPos++;
                        }
                        // Standing / running
                        this.canvasCtx.drawImage(Runner.imageSprite, sourceX, sourceY,
                            sourceWidth, sourceHeight,
                            this.xPos, this.yPos,
                            this.config.WIDTH, this.config.HEIGHT);
                    }
                },
                /**
                 * Sets a random time for the blink to happen.
                 */
                setBlinkDelay: function() {
                    this.blinkDelay = Math.ceil(Math.random() * Trex.BLINK_TIMING);
                },
                /**
                 * Make t-rex blink at random intervals.
                 * @param {number} time Current time in milliseconds.
                 */
                blink: function(time) {
                    var deltaTime = time - this.animStartTime;
                    if (deltaTime >= this.blinkDelay) {
                        this.draw(this.currentAnimFrames[this.currentFrame], 0);
                        if (this.currentFrame == 1) {
                            // Set new random delay to blink.
                            this.setBlinkDelay();
                            this.animStartTime = time;
                        }
                    }
                },
                /**
                 * Initialise a jump.
                 * @param {number} speed
                 */
                startJump: function(speed) {
                    if (!this.jumping) {
                        this.update(0, Trex.status.JUMPING);
                        // Tweak the jump velocity based on the speed.
                        this.jumpVelocity = this.config.INIITAL_JUMP_VELOCITY - (speed / 10);
                        this.jumping = true;
                        this.reachedMinHeight = false;
                        this.speedDrop = false;
                    }
                },
                /**
                 * Jump is complete, falling down.
                 */
                endJump: function() {
                    if (this.reachedMinHeight &&
                        this.jumpVelocity < this.config.DROP_VELOCITY) {
                        this.jumpVelocity = this.config.DROP_VELOCITY;
                    }
                },
                /**
                 * Update frame for a jump.
                 * @param {number} deltaTime
                 * @param {number} speed
                 */
                updateJump: function(deltaTime, speed) {
                    var msPerFrame = Trex.animFrames[this.status].msPerFrame;
                    var framesElapsed = deltaTime / msPerFrame;
                    // Speed drop makes Trex fall faster.
                    if (this.speedDrop) {
                        this.yPos += Math.round(this.jumpVelocity *
                            this.config.SPEED_DROP_COEFFICIENT * framesElapsed);
                    } else {
                        this.yPos += Math.round(this.jumpVelocity * framesElapsed);
                    }
                    this.jumpVelocity += this.config.GRAVITY * framesElapsed;
                    // Minimum height has been reached.
                    if (this.yPos < this.minJumpHeight || this.speedDrop) {
                        this.reachedMinHeight = true;
                    }
                    // Reached max height
                    if (this.yPos < this.config.MAX_JUMP_HEIGHT || this.speedDrop) {
                        this.endJump();
                    }
                    // Back down at ground level. Jump completed.
                    if (this.yPos > this.groundYPos) {
                        this.reset();
                        this.jumpCount++;
                    }
                    this.update(deltaTime);
                },
                /**
                 * Set the speed drop. Immediately cancels the current jump.
                 */
                setSpeedDrop: function() {
                    this.speedDrop = true;
                    this.jumpVelocity = 1;
                },
                /**
                 * @param {boolean} isDucking.
                 */
                setDuck: function(isDucking) {
                    if (isDucking && this.status != Trex.status.DUCKING) {
                        this.update(0, Trex.status.DUCKING);
                        this.ducking = true;
                    } else if (this.status == Trex.status.DUCKING) {
                        this.update(0, Trex.status.RUNNING);
                        this.ducking = false;
                    }
                },
                /**
                 * Reset the t-rex to running at start of game.
                 */
                reset: function() {
                    this.yPos = this.groundYPos;
                    this.jumpVelocity = 0;
                    this.jumping = false;
                    this.ducking = false;
                    this.update(0, Trex.status.RUNNING);
                    this.midair = false;
                    this.speedDrop = false;
                    this.jumpCount = 0;
                }
            };
            //******************************************************************************
            /**
             * Handles displaying the distance meter.
             * @param {!HTMLCanvasElement} canvas
             * @param {Object} spritePos Image position in sprite.
             * @param {number} canvasWidth
             * @constructor
             */
            function DistanceMeter(canvas, spritePos, canvasWidth) {
                this.canvas = canvas;
                this.canvasCtx = canvas.getContext('2d');
                this.image = Runner.imageSprite;
                this.spritePos = spritePos;
                this.x = 0;
                this.y = 5;
                this.currentDistance = 0;
                this.maxScore = 0;
                this.highScore = 0;
                this.container = null;
                this.digits = [];
                this.acheivement = false;
                this.defaultString = '';
                this.flashTimer = 0;
                this.flashIterations = 0;
                this.invertTrigger = false;
                this.config = DistanceMeter.config;
                this.maxScoreUnits = this.config.MAX_DISTANCE_UNITS;
                this.init(canvasWidth);
            };
            /**
             * @enum {number}
             */
            DistanceMeter.dimensions = {
                WIDTH: 10,
                HEIGHT: 13,
                DEST_WIDTH: 11
            };
            /**
             * Y positioning of the digits in the sprite sheet.
             * X position is always 0.
             * @type {Array<number>}
             */
            DistanceMeter.yPos = [0, 13, 27, 40, 53, 67, 80, 93, 107, 120];
            /**
             * Distance meter config.
             * @enum {number}
             */
            DistanceMeter.config = {
                // Number of digits.
                MAX_DISTANCE_UNITS: 5,
                // Distance that causes achievement animation.
                ACHIEVEMENT_DISTANCE: 100,
                // Used for conversion from pixel distance to a scaled unit.
                COEFFICIENT: 0.025,
                // Flash duration in milliseconds.
                FLASH_DURATION: 1000 / 4,
                // Flash iterations for achievement animation.
                FLASH_ITERATIONS: 3
            };
            DistanceMeter.prototype = {
                /**
                 * Initialise the distance meter to '00000'.
                 * @param {number} width Canvas width in px.
                 */
                init: function(width) {
                    var maxDistanceStr = '';
                    this.calcXPos(width);
                    this.maxScore = this.maxScoreUnits;
                    for (var i = 0; i < this.maxScoreUnits; i++) {
                        this.draw(i, 0);
                        this.defaultString += '0';
                        maxDistanceStr += '9';
                    }
                    this.maxScore = parseInt(maxDistanceStr);
                },
                /**
                 * Calculate the xPos in the canvas.
                 * @param {number} canvasWidth
                 */
                calcXPos: function(canvasWidth) {
                    this.x = canvasWidth - (DistanceMeter.dimensions.DEST_WIDTH *
                        (this.maxScoreUnits + 1));
                },
                /**
                 * Draw a digit to canvas.
                 * @param {number} digitPos Position of the digit.
                 * @param {number} value Digit value 0-9.
                 * @param {boolean} opt_highScore Whether drawing the high score.
                 */
                draw: function(digitPos, value, opt_highScore) {
                    var sourceWidth = DistanceMeter.dimensions.WIDTH;
                    var sourceHeight = DistanceMeter.dimensions.HEIGHT;
                    var sourceX = DistanceMeter.dimensions.WIDTH * value;
                    var sourceY = 0;
                    var targetX = digitPos * DistanceMeter.dimensions.DEST_WIDTH;
                    var targetY = this.y;
                    var targetWidth = DistanceMeter.dimensions.WIDTH;
                    var targetHeight = DistanceMeter.dimensions.HEIGHT;
                    // For high DPI we 2x source values.
                    if (IS_HIDPI) {
                        sourceWidth *= 2;
                        sourceHeight *= 2;
                        sourceX *= 2;
                    }
                    sourceX += this.spritePos.x;
                    sourceY += this.spritePos.y;
                    this.canvasCtx.save();
                    if (opt_highScore) {
                        // Left of the current score.
                        var highScoreX = this.x - (this.maxScoreUnits * 2) *
                            DistanceMeter.dimensions.WIDTH;
                        this.canvasCtx.translate(highScoreX, this.y);
                    } else {
                        this.canvasCtx.translate(this.x, this.y);
                    }
                    this.canvasCtx.drawImage(this.image, sourceX, sourceY,
                        sourceWidth, sourceHeight,
                        targetX, targetY,
                        targetWidth, targetHeight
                    );
                    this.canvasCtx.restore();
                },
                /**
                 * Covert pixel distance to a 'real' distance.
                 * @param {number} distance Pixel distance ran.
                 * @return {number} The 'real' distance ran.
                 */
                getActualDistance: function(distance) {
                    return distance ? Math.round(distance * this.config.COEFFICIENT) : 0;
                },
                /**
                 * Update the distance meter.
                 * @param {number} distance
                 * @param {number} deltaTime
                 * @return {boolean} Whether the acheivement sound fx should be played.
                 */
                update: function(deltaTime, distance) {
                    var paint = true;
                    var playSound = false;
                    if (!this.acheivement) {
                        distance = this.getActualDistance(distance);
                        // Score has gone beyond the initial digit count.
                        if (distance > this.maxScore && this.maxScoreUnits ==
                            this.config.MAX_DISTANCE_UNITS) {
                            this.maxScoreUnits++;
                            this.maxScore = parseInt(this.maxScore + '9');
                        } else {
                            this.distance = 0;
                        }
                        if (distance > 0) {
                            // Acheivement unlocked
                            if (distance % this.config.ACHIEVEMENT_DISTANCE == 0) {
                                // Flash score and play sound.
                                this.acheivement = true;
                                this.flashTimer = 0;
                                playSound = true;
                            }
                            // Create a string representation of the distance with leading 0.
                            var distanceStr = (this.defaultString +
                                distance).substr(-this.maxScoreUnits);
                            this.digits = distanceStr.split('');
                        } else {
                            this.digits = this.defaultString.split('');
                        }
                    } else {
                        // Control flashing of the score on reaching acheivement.
                        if (this.flashIterations <= this.config.FLASH_ITERATIONS) {
                            this.flashTimer += deltaTime;
                            if (this.flashTimer < this.config.FLASH_DURATION) {
                                paint = false;
                            } else if (this.flashTimer >
                                this.config.FLASH_DURATION * 2) {
                                this.flashTimer = 0;
                                this.flashIterations++;
                            }
                        } else {
                            this.acheivement = false;
                            this.flashIterations = 0;
                            this.flashTimer = 0;
                        }
                    }
                    // Draw the digits if not flashing.
                    if (paint) {
                        for (var i = this.digits.length - 1; i >= 0; i--) {
                            this.draw(i, parseInt(this.digits[i]));
                        }
                    }
                    this.drawHighScore();
                    return playSound;
                },
                /**
                 * Draw the high score.
                 */
                drawHighScore: function() {
                    this.canvasCtx.save();
                    this.canvasCtx.globalAlpha = .8;
                    for (var i = this.highScore.length - 1; i >= 0; i--) {
                        this.draw(i, parseInt(this.highScore[i], 10), true);
                    }
                    this.canvasCtx.restore();
                },
                /**
                 * Set the highscore as a array string.
                 * Position of char in the sprite: H - 10, I - 11.
                 * @param {number} distance Distance ran in pixels.
                 */
                setHighScore: function(distance) {
                    distance = this.getActualDistance(distance);
                    var highScoreStr = (this.defaultString +
                        distance).substr(-this.maxScoreUnits);
                    this.highScore = ['10', '11', ''].concat(highScoreStr.split(''));
                },
                /**
                 * Reset the distance meter back to '00000'.
                 */
                reset: function() {
                    this.update(0);
                    this.acheivement = false;
                }
            };
            //******************************************************************************
            /**
             * Cloud background item.
             * Similar to an obstacle object but without collision boxes.
             * @param {HTMLCanvasElement} canvas Canvas element.
             * @param {Object} spritePos Position of image in sprite.
             * @param {number} containerWidth
             */
            function Cloud(canvas, spritePos, containerWidth) {
                this.canvas = canvas;
                this.canvasCtx = this.canvas.getContext('2d');
                this.spritePos = spritePos;
                this.containerWidth = containerWidth;
                this.xPos = containerWidth;
                this.yPos = 0;
                this.remove = false;
                this.cloudGap = getRandomNum(Cloud.config.MIN_CLOUD_GAP,
                    Cloud.config.MAX_CLOUD_GAP);
                this.init();
            };
            /**
             * Cloud object config.
             * @enum {number}
             */
            Cloud.config = {
                HEIGHT: 14,
                MAX_CLOUD_GAP: 400,
                MAX_SKY_LEVEL: 30,
                MIN_CLOUD_GAP: 100,
                MIN_SKY_LEVEL: 71,
                WIDTH: 46
            };
            Cloud.prototype = {
                /**
                 * Initialise the cloud. Sets the Cloud height.
                 */
                init: function() {
                    this.yPos = getRandomNum(Cloud.config.MAX_SKY_LEVEL,
                        Cloud.config.MIN_SKY_LEVEL);
                    this.draw();
                },
                /**
                 * Draw the cloud.
                 */
                draw: function() {
                    this.canvasCtx.save();
                    var sourceWidth = Cloud.config.WIDTH;
                    var sourceHeight = Cloud.config.HEIGHT;
                    if (IS_HIDPI) {
                        sourceWidth = sourceWidth * 2;
                        sourceHeight = sourceHeight * 2;
                    }
                    this.canvasCtx.drawImage(Runner.imageSprite, this.spritePos.x,
                        this.spritePos.y,
                        sourceWidth, sourceHeight,
                        this.xPos, this.yPos,
                        Cloud.config.WIDTH, Cloud.config.HEIGHT);
                    this.canvasCtx.restore();
                },
                /**
                 * Update the cloud position.
                 * @param {number} speed
                 */
                update: function(speed) {
                    if (!this.remove) {
                        this.xPos -= Math.ceil(speed);
                        this.draw();
                        // Mark as removeable if no longer in the canvas.
                        if (!this.isVisible()) {
                            this.remove = true;
                        }
                    }
                },
                /**
                 * Check if the cloud is visible on the stage.
                 * @return {boolean}
                 */
                isVisible: function() {
                    return this.xPos + Cloud.config.WIDTH > 0;
                }
            };
            //******************************************************************************
            /**
             * Nightmode shows a moon and stars on the horizon.
             */
            function NightMode(canvas, spritePos, containerWidth) {
                this.spritePos = spritePos;
                this.canvas = canvas;
                this.canvasCtx = canvas.getContext('2d');
                this.xPos = containerWidth - 50;
                this.yPos = 30;
                this.currentPhase = 0;
                this.opacity = 0;
                this.containerWidth = containerWidth;
                this.stars = [];
                this.drawStars = false;
                this.placeStars();
            };
            /**
             * @enum {number}
             */
            NightMode.config = {
                FADE_SPEED: 0.035,
                HEIGHT: 40,
                MOON_SPEED: 0.25,
                NUM_STARS: 2,
                STAR_SIZE: 9,
                STAR_SPEED: 0.3,
                STAR_MAX_Y: 70,
                WIDTH: 20
            };
            NightMode.phases = [140, 120, 100, 60, 40, 20, 0];
            NightMode.prototype = {
                /**
                 * Update moving moon, changing phases.
                 * @param {boolean} activated Whether night mode is activated.
                 * @param {number} delta
                 */
                update: function(activated, delta) {
                    // Moon phase.
                    if (activated && this.opacity == 0) {
                        this.currentPhase++;
                        if (this.currentPhase >= NightMode.phases.length) {
                            this.currentPhase = 0;
                        }
                    }
                    // Fade in / out.
                    if (activated && (this.opacity < 1 || this.opacity == 0)) {
                        this.opacity += NightMode.config.FADE_SPEED;
                    } else if (this.opacity > 0) {
                        this.opacity -= NightMode.config.FADE_SPEED;
                    }
                    // Set moon positioning.
                    if (this.opacity > 0) {
                        this.xPos = this.updateXPos(this.xPos, NightMode.config.MOON_SPEED);
                        // Update stars.
                        if (this.drawStars) {
                            for (var i = 0; i < NightMode.config.NUM_STARS; i++) {
                                this.stars[i].x = this.updateXPos(this.stars[i].x,
                                    NightMode.config.STAR_SPEED);
                            }
                        }
                        this.draw();
                    } else {
                        this.opacity = 0;
                        this.placeStars();
                    }
                    this.drawStars = true;
                },
                updateXPos: function(currentPos, speed) {
                    if (currentPos < -NightMode.config.WIDTH) {
                        currentPos = this.containerWidth;
                    } else {
                        currentPos -= speed;
                    }
                    return currentPos;
                },
                draw: function() {
                    var moonSourceWidth = this.currentPhase == 3 ? NightMode.config.WIDTH * 2 :
                        NightMode.config.WIDTH;
                    var moonSourceHeight = NightMode.config.HEIGHT;
                    var moonSourceX = this.spritePos.x + NightMode.phases[this.currentPhase];
                    var moonOutputWidth = moonSourceWidth;
                    var starSize = NightMode.config.STAR_SIZE;
                    var starSourceX = Runner.spriteDefinition.LDPI.STAR.x;
                    if (IS_HIDPI) {
                        moonSourceWidth *= 2;
                        moonSourceHeight *= 2;
                        moonSourceX = this.spritePos.x +
                            (NightMode.phases[this.currentPhase] * 2);
                        starSize *= 2;
                        starSourceX = Runner.spriteDefinition.HDPI.STAR.x;
                    }
                    this.canvasCtx.save();
                    this.canvasCtx.globalAlpha = this.opacity;
                    // Stars.
                    if (this.drawStars) {
                        for (var i = 0; i < NightMode.config.NUM_STARS; i++) {
                            this.canvasCtx.drawImage(Runner.imageSprite,
                                starSourceX, this.stars[i].sourceY, starSize, starSize,
                                Math.round(this.stars[i].x), this.stars[i].y,
                                NightMode.config.STAR_SIZE, NightMode.config.STAR_SIZE);
                        }
                    }
                    // Moon.
                    this.canvasCtx.drawImage(Runner.imageSprite, moonSourceX,
                        this.spritePos.y, moonSourceWidth, moonSourceHeight,
                        Math.round(this.xPos), this.yPos,
                        moonOutputWidth, NightMode.config.HEIGHT);
                    this.canvasCtx.globalAlpha = 1;
                    this.canvasCtx.restore();
                },
                // Do star placement.
                placeStars: function() {
                    var segmentSize = Math.round(this.containerWidth /
                        NightMode.config.NUM_STARS);
                    for (var i = 0; i < NightMode.config.NUM_STARS; i++) {
                        this.stars[i] = {};
                        this.stars[i].x = getRandomNum(segmentSize * i, segmentSize * (i + 1));
                        this.stars[i].y = getRandomNum(0, NightMode.config.STAR_MAX_Y);
                        if (IS_HIDPI) {
                            this.stars[i].sourceY = Runner.spriteDefinition.HDPI.STAR.y +
                                NightMode.config.STAR_SIZE * 2 * i;
                        } else {
                            this.stars[i].sourceY = Runner.spriteDefinition.LDPI.STAR.y +
                                NightMode.config.STAR_SIZE * i;
                        }
                    }
                },
                reset: function() {
                    this.currentPhase = 0;
                    this.opacity = 0;
                    this.update(false);
                }
            };
            //******************************************************************************
            /**
             * Horizon Line.
             * Consists of two connecting lines. Randomly assigns a flat / bumpy horizon.
             * @param {HTMLCanvasElement} canvas
             * @param {Object} spritePos Horizon position in sprite.
             * @constructor
             */
            function HorizonLine(canvas, spritePos) {
                this.spritePos = spritePos;
                this.canvas = canvas;
                this.canvasCtx = canvas.getContext('2d');
                this.sourceDimensions = {};
                this.dimensions = HorizonLine.dimensions;
                this.sourceXPos = [this.spritePos.x, this.spritePos.x +
                this.dimensions.WIDTH];
                this.xPos = [];
                this.yPos = 0;
                this.bumpThreshold = 0.5;
                this.setSourceDimensions();
                this.draw();
            };
            /**
             * Horizon line dimensions.
             * @enum {number}
             */
            HorizonLine.dimensions = {
                WIDTH: 600,
                HEIGHT: 12,
                YPOS: 127
            };
            HorizonLine.prototype = {
                /**
                 * Set the source dimensions of the horizon line.
                 */
                setSourceDimensions: function() {
                    for (var dimension in HorizonLine.dimensions) {
                        if (IS_HIDPI) {
                            if (dimension != 'YPOS') {
                                this.sourceDimensions[dimension] =
                                    HorizonLine.dimensions[dimension] * 2;
                            }
                        } else {
                            this.sourceDimensions[dimension] =
                                HorizonLine.dimensions[dimension];
                        }
                        this.dimensions[dimension] = HorizonLine.dimensions[dimension];
                    }
                    this.xPos = [0, HorizonLine.dimensions.WIDTH];
                    this.yPos = HorizonLine.dimensions.YPOS;
                },
                /**
                 * Return the crop x position of a type.
                 */
                getRandomType: function() {
                    return Math.random() > this.bumpThreshold ? this.dimensions.WIDTH : 0;
                },
                /**
                 * Draw the horizon line.
                 */
                draw: function() {
                    this.canvasCtx.drawImage(Runner.imageSprite, this.sourceXPos[0],
                        this.spritePos.y,
                        this.sourceDimensions.WIDTH, this.sourceDimensions.HEIGHT,
                        this.xPos[0], this.yPos,
                        this.dimensions.WIDTH, this.dimensions.HEIGHT);
                    this.canvasCtx.drawImage(Runner.imageSprite, this.sourceXPos[1],
                        this.spritePos.y,
                        this.sourceDimensions.WIDTH, this.sourceDimensions.HEIGHT,
                        this.xPos[1], this.yPos,
                        this.dimensions.WIDTH, this.dimensions.HEIGHT);
                },
                /**
                 * Update the x position of an indivdual piece of the line.
                 * @param {number} pos Line position.
                 * @param {number} increment
                 */
                updateXPos: function(pos, increment) {
                    var line1 = pos;
                    var line2 = pos == 0 ? 1 : 0;
                    this.xPos[line1] -= increment;
                    this.xPos[line2] = this.xPos[line1] + this.dimensions.WIDTH;
                    if (this.xPos[line1] <= -this.dimensions.WIDTH) {
                        this.xPos[line1] += this.dimensions.WIDTH * 2;
                        this.xPos[line2] = this.xPos[line1] - this.dimensions.WIDTH;
                        this.sourceXPos[line1] = this.getRandomType() + this.spritePos.x;
                    }
                },
                /**
                 * Update the horizon line.
                 * @param {number} deltaTime
                 * @param {number} speed
                 */
                update: function(deltaTime, speed) {
                    var increment = Math.floor(speed * (FPS / 1000) * deltaTime);
                    if (this.xPos[0] <= 0) {
                        this.updateXPos(0, increment);
                    } else {
                        this.updateXPos(1, increment);
                    }
                    this.draw();
                },
                /**
                 * Reset horizon to the starting position.
                 */
                reset: function() {
                    this.xPos[0] = 0;
                    this.xPos[1] = HorizonLine.dimensions.WIDTH;
                }
            };
            //******************************************************************************
            /**
             * Horizon background class.
             * @param {HTMLCanvasElement} canvas
             * @param {Object} spritePos Sprite positioning.
             * @param {Object} dimensions Canvas dimensions.
             * @param {number} gapCoefficient
             * @constructor
             */
            function Horizon(canvas, spritePos, dimensions, gapCoefficient) {
                this.canvas = canvas;
                this.canvasCtx = this.canvas.getContext('2d');
                this.config = Horizon.config;
                this.dimensions = dimensions;
                this.gapCoefficient = gapCoefficient;
                this.obstacles = [];
                this.obstacleHistory = [];
                this.horizonOffsets = [0, 0];
                this.cloudFrequency = this.config.CLOUD_FREQUENCY;
                this.spritePos = spritePos;
                this.nightMode = null;
                // Cloud
                this.clouds = [];
                this.cloudSpeed = this.config.BG_CLOUD_SPEED;
                // Horizon
                this.horizonLine = null;
                this.init();
            };
            /**
             * Horizon config.
             * @enum {number}
             */
            Horizon.config = {
                BG_CLOUD_SPEED: 0.2,
                BUMPY_THRESHOLD: .3,
                CLOUD_FREQUENCY: .5,
                HORIZON_HEIGHT: 16,
                MAX_CLOUDS: 6
            };
            Horizon.prototype = {
                /**
                 * Initialise the horizon. Just add the line and a cloud. No obstacles.
                 */
                init: function() {
                    this.addCloud();
                    this.horizonLine = new HorizonLine(this.canvas, this.spritePos.HORIZON);
                    this.nightMode = new NightMode(this.canvas, this.spritePos.MOON,
                        this.dimensions.WIDTH);
                },
                /**
                 * @param {number} deltaTime
                 * @param {number} currentSpeed
                 * @param {boolean} updateObstacles Used as an override to prevent
                 *     the obstacles from being updated / added. This happens in the
                 *     ease in section.
                 * @param {boolean} showNightMode Night mode activated.
                 */
                update: function(deltaTime, currentSpeed, updateObstacles, showNightMode) {
                    this.runningTime += deltaTime;
                    this.horizonLine.update(deltaTime, currentSpeed);
                    this.nightMode.update(showNightMode);
                    this.updateClouds(deltaTime, currentSpeed);
                    if (updateObstacles) {
                        this.updateObstacles(deltaTime, currentSpeed);
                    }
                },
                /**
                 * Update the cloud positions.
                 * @param {number} deltaTime
                 * @param {number} currentSpeed
                 */
                updateClouds: function(deltaTime, speed) {
                    var cloudSpeed = this.cloudSpeed / 1000 * deltaTime * speed;
                    var numClouds = this.clouds.length;
                    if (numClouds) {
                        for (var i = numClouds - 1; i >= 0; i--) {
                            this.clouds[i].update(cloudSpeed);
                        }
                        var lastCloud = this.clouds[numClouds - 1];
                        // Check for adding a new cloud.
                        if (numClouds < this.config.MAX_CLOUDS &&
                            (this.dimensions.WIDTH - lastCloud.xPos) > lastCloud.cloudGap &&
                            this.cloudFrequency > Math.random()) {
                            this.addCloud();
                        }
                        // Remove expired clouds.
                        this.clouds = this.clouds.filter(function(obj) {
                            return !obj.remove;
                        });
                    } else {
                        this.addCloud();
                    }
                },
                /**
                 * Update the obstacle positions.
                 * @param {number} deltaTime
                 * @param {number} currentSpeed
                 */
                updateObstacles: function(deltaTime, currentSpeed) {
                    // Obstacles, move to Horizon layer.
                    var updatedObstacles = this.obstacles.slice(0);
                    for (var i = 0; i < this.obstacles.length; i++) {
                        var obstacle = this.obstacles[i];
                        obstacle.update(deltaTime, currentSpeed);
                        // Clean up existing obstacles.
                        if (obstacle.remove) {
                            updatedObstacles.shift();
                        }
                    }
                    this.obstacles = updatedObstacles;
                    if (this.obstacles.length > 0) {
                        var lastObstacle = this.obstacles[this.obstacles.length - 1];
                        if (lastObstacle && !lastObstacle.followingObstacleCreated &&
                            lastObstacle.isVisible() &&
                            (lastObstacle.xPos + lastObstacle.width + lastObstacle.gap) <
                            this.dimensions.WIDTH) {
                            this.addNewObstacle(currentSpeed);
                            lastObstacle.followingObstacleCreated = true;
                        }
                    } else {
                        // Create new obstacles.
                        this.addNewObstacle(currentSpeed);
                    }
                },
                removeFirstObstacle: function() {
                    this.obstacles.shift();
                },
                /**
                 * Add a new obstacle.
                 * @param {number} currentSpeed
                 */
                addNewObstacle: function(currentSpeed) {
                    var obstacleTypeIndex = getRandomNum(0, Obstacle.types.length - 1);
                    var obstacleType = Obstacle.types[obstacleTypeIndex];
                    // Check for multiples of the same type of obstacle.
                    // Also check obstacle is available at current speed.
                    if (this.duplicateObstacleCheck(obstacleType.type) ||
                        currentSpeed < obstacleType.minSpeed) {
                        this.addNewObstacle(currentSpeed);
                    } else {
                        var obstacleSpritePos = this.spritePos[obstacleType.type];
                        this.obstacles.push(new Obstacle(this.canvasCtx, obstacleType,
                            obstacleSpritePos, this.dimensions,
                            this.gapCoefficient, currentSpeed, obstacleType.width));
                        this.obstacleHistory.unshift(obstacleType.type);
                        if (this.obstacleHistory.length > 1) {
                            this.obstacleHistory.splice(Runner.config.MAX_OBSTACLE_DUPLICATION);
                        }
                    }
                },
                /**
                 * Returns whether the previous two obstacles are the same as the next one.
                 * Maximum duplication is set in config value MAX_OBSTACLE_DUPLICATION.
                 * @return {boolean}
                 */
                duplicateObstacleCheck: function(nextObstacleType) {
                    var duplicateCount = 0;
                    for (var i = 0; i < this.obstacleHistory.length; i++) {
                        duplicateCount = this.obstacleHistory[i] == nextObstacleType ?
                            duplicateCount + 1 : 0;
                    }
                    return duplicateCount >= Runner.config.MAX_OBSTACLE_DUPLICATION;
                },
                /**
                 * Reset the horizon layer.
                 * Remove existing obstacles and reposition the horizon line.
                 */
                reset: function() {
                    this.obstacles = [];
                    this.horizonLine.reset();
                    this.nightMode.reset();
                },
                /**
                 * Update the canvas width and scaling.
                 * @param {number} width Canvas width.
                 * @param {number} height Canvas height.
                 */
                resize: function(width, height) {
                    this.canvas.width = width;
                    this.canvas.height = height;
                },
                /**
                 * Add a new cloud to the horizon.
                 */
                addCloud: function() {
                    this.clouds.push(new Cloud(this.canvas, this.spritePos.CLOUD,
                        this.dimensions.WIDTH));
                }
            };
        })();



    </script>
    <style>/* Copyright 2014 The Chromium Authors. All rights reserved.
            Use of this source code is governed by a BSD-style license that can be
            found in the LICENSE file. */
        a {
            color: #585858;
        }
        body {
            background-color: #f7f7f7;
            color: #585858;
            font-size: 125%;
            font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;
        }
        body.safe-browsing {
            background-color: rgb(206, 52, 38);
            color: white;
        }
        button {
            background: rgb(76, 142, 250);
            border: 0;
            border-radius: 2px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            float: right;
            font-size: .875em;
            height: 36px;
            margin: -6px 0 0;
            padding: 8px 24px;
            transition: box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1);
        }
        [dir='rtl'] button {
            float: left;
        }
        button:active {
            background: rgb(50, 102, 213);
            outline: 0;
        }
        button:hover {
            box-shadow: 0 1px 3px rgba(0, 0, 0, .50);
        }
        .debugging-content {
            line-height: 1em;
            margin-bottom: 0;
            margin-top: 0;
        }
        .debugging-title {
            font-weight: bold;
        }
        #details {
            color: #696969;
            margin: 45px 0 50px;
        }
        #details p:not(:first-of-type) {
            margin-top: 20px;
        }
        #error-code {
            color: black;
            opacity: .35;
            text-transform: uppercase;
        }
        #error-debugging-info {
            font-size: 0.8em;
        }
        h1 {
            -webkit-margin-after: 16px;
            color: #585858;
            font-size: 1.6em;
            font-weight: normal;
            line-height: 1.25em;
        }
        h2 {
            font-size: 1.2em;
            font-weight: normal;
        }
        .hidden {
            display: none;
        }
        .icon {
            background-repeat: no-repeat;
            background-size: 100%;
            height: 72px;
            margin: 0 0 40px;
            width: 72px;
        }
        input[type=checkbox] {
            visibility: hidden;
        }
        .interstitial-wrapper {
            box-sizing: border-box;
            font-size: 1em;
            line-height: 1.6em;
            margin: 50px auto 0;
            max-width: 600px;
            width: 100%;
        }
        #malware-opt-in {
            font-size: .875em;
            margin-top: 39px;
        }
        .nav-wrapper {
            margin-top: 51px;
        }
        .nav-wrapper::after {
            clear: both;
            content: '';
            display: table;
            width: 100%;
        }
        #opt-in-label {
            -webkit-margin-start: 32px;
        }
        .safe-browsing :-webkit-any(
            a, #details, #details-button, h1, h2, p, .small-link) {
            color: white;
        }
        .safe-browsing button {
            background-color: rgb(206, 52, 38);
            border: 1px solid white;
        }
        .safe-browsing button:active {
            background-color: rgb(206, 52, 38);
            border-color: rgba(255, 255, 255, .6);
        }
        .safe-browsing button:hover {
            box-shadow: 0 2px 3px rgba(0, 0, 0, .5);
        }
        .safe-browsing .icon {
            background-image: -webkit-image-set(
                url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAABoVBMVEX///+Li4v////////y8vL09PT99fTbRDfXzMzt7e3v7+/s7Ozy8vLw8PDu7u799PPSQTXx8fHZdGv19fX09PTm5ubbV0zXzczgW1Dd3d3c3Nzjb2Th4eHr6+vl5eXp6enZ2dng4OD29vbz8/PYYFXZV0zaYVbjbWP219TRQTTXdGz43Nn++/rib2T////b29vTQjXaYVf66ObngXjjbmTq6ura2trngHf76Ofk19bX19fe3t7o6Oji4uLk5OTeU0f119TYQzbZQzbWQjbXQzbZRDfaRDfn5+fbV0vj4+PVQjXf39/Y2Njgcmney8rqk4zdysn43drcysjcUETa1tbadGvaV0vaWEzZYVbibmXc2NjfzMvi0M7mfHPYYVbhzszd2dnZx8XieXDkc2nWX1Xacmne2trZdGzbcWjj0c/XTUHX1NPVX1Xg3NzYdGvYXFHZ1dXWTUHgzczUX1Xh3d3XdWzWXFHaVkvXxcTVTEHhbmXTXlXi3t7ayMbVXFLgbmXUTEDXYFXSXlTXzMvk4ODUXFHWbGPWzMvk4eHZioP39/f9Ro5BAAAABnRSTlMAAOQk5ye8yu+CAAACRklEQVR4XrXWRZPbUBSEUWdmIpl5mJmZg8zMzMzMzPCr43isNqif76u6lW+nuzgrtUqB/1ptzUSVamrVDiS1A0ntQFI7kNQOJLUDSe1AUjuQ1A4ktQNJ70DSO5D0DiS9A0nvQIKjlOAoJThqyewsXZ1hQOL8YZNkcJrcJiIlBt2No0zKQSbHJVJiznW5BIg4kMocSDIEBxKcwvkoJAE6uMJAguO13xIaWyyRiDPdGGGQJBFnzb4Qh2Qp0VrmdHXFCSRKxFmYDAsQpNkSiTgtLZAAydIgcZqbYwQSJOqs3QsJkCRxp7s7RSBBok5bW5RAgkSd9bujIoS3AA0QZ0NHrx3ktLro5SvidNRnAUkO2nWZOPU7s4BEB9J74qzrzACSHNRwhDid8xlAogPpEHHa23sIxJyB60XpAHEioT9myBnf4XWq8W4aDw1niROKA/I7270u5HbxKI3Hk0+IEzZBzuktXn35XRw7jsOJi34nZoCcN5u9+gq7OJPGqf+czzFAzsdtXp+xi0tpHPtvVzopDl3Z6nUtWNzXjZs436p0DNDQnT0r3QuW7vT+g8L54XKlEzX8RAw9nvrX02D53p89z59f+J0602/NptfJZPKt52AX70Zy5w/EWR0wSp+Gv3z1f3++jQx/545Z+vGTfcd+/eYOJFIEDtkpccxSyNqRpLitI0uWjiyFLR1ZignOqoC1VN0BJEupag4gK8nsALKToiYHkK3Uyx0CiRJ3ANlLWe4AspcyxKGQLHEHkL3UQxwKyRJxCKTtLyVXfw+a8JTgAAAAAElFTkSuQmCC) 1x,
                url(data:image/png;base64,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) 2x);
        }
        .small-link {
            color: #696969;
            font-size: .875em;
        }
        .ssl .icon {
            background-image: -webkit-image-set(
                url(data:image/png;base64,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) 1x,
                url(data:image/png;base64,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) 2x);
        }
        .styled-checkbox {
            float: left;
            height: 16px;
            margin-top: .36em;
            position: relative;
            width: 16px;
        }
        [dir='rtl'] .styled-checkbox {
            float: right;
        }
        .styled-checkbox label {
            background: transparent;
            border: white solid 1px;
            border-radius: 2px;
            height: 14px;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: 14px;
        }
        .styled-checkbox label::after {
            background: transparent;
            border: 2px solid white;
            border-right-width: 0;
            border-top-width: 0;
            content: '';
            height: 4px;
            left: 2px;
            opacity: 0.3;
            position: absolute;
            top: 3px;
            transform: rotate(-45deg);
            width: 9px;
        }
        .styled-checkbox input[type=checkbox]:checked + label::after {
            opacity: 1;
        }
        @media (max-width: 700px) {
            .interstitial-wrapper {
                padding: 0 10%;
            }
        }
        @media (max-height: 600px) {
            .interstitial-wrapper {
                margin-top: 5px;
            }
        }
        @media (max-width: 400px) {
            button,
            [dir='rtl'] button {
                float: none;
                font-size: 1em;
                width: 100%;
            }
            #details {
                margin: 20px 0 20px 0;
            }
            #details p:not(:first-of-type) {
                margin-top: 10px;
            }
            #details-button {
                display: block;
                padding-top: 14px;
                text-align: center;
                width: 100%;
            }
            .interstitial-wrapper {
                padding: 0 5%;
            }
            #malware-opt-in {
                margin-top: 24px;
            }
            .nav-wrapper {
                margin-top: 30px;
            }
            .small-link {
                font-size: 1em;
            }
        }
    </style>
    <style>/* Copyright 2013 The Chromium Authors. All rights reserved.
            * Use of this source code is governed by a BSD-style license that can be
            * found in the LICENSE file. */
        /* Don't use the main frame div when the error is in a subframe. */
        html[subframe] #main-frame-error {
            display: none;
        }
        /* Don't use the subframe error div when the error is in a main frame. */
        html:not([subframe]) #sub-frame-error {
            display: none;
        }
        #diagnose-button {
            -webkit-margin-start: 0;
            float: none;
            margin-bottom: 10px;
            margin-top: 20px;
        }
        h1 {
            -webkit-margin-before: 0;
        }
        h2 {
            color: #666;
            font-size: 1.2em;
            font-weight: normal;
            margin: 10px 0;
        }
        a {
            color: rgb(17, 85, 204);
            text-decoration: none;
        }
        .icon {
            -webkit-user-select: none;
        }
        .icon-generic {
            /**
            * Can't access chrome://theme/IDR_ERROR_NETWORK_GENERIC from an untrusted
            * renderer process, so embed the resource manually.
            */
            content: -webkit-image-set(
                url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAAyCAAAAADkGq1yAAAAAnRSTlMA/1uRIrUAAABLSURBVHhe7dOxDQAgCERRdrza/ScwscNYSKIhWAror9+VR7BjKZbkrSpKeA45K8PQuoYqcUNKbmUzpNkD8kvM/ErlkVFk8necCyU7IotT35DVJRIAAAAASUVORK5CYII=') 1x,
                url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFIAAABkCAAAAAAwZDj3AAAAAnRSTlMA/1uRIrUAAABiSURBVHhe7cy7CYAwFABAd8z+HyewskkTW+EFA3kgSu4GuK2ktI71SqWyjeyxirlS2aeMQczfKcuNUjny/1KpPCbKjA+WSqVSqVQqawmy5TlZKpVPQciVSuUEpVKZtVypVF5DHE3/NzR+1AAAAABJRU5ErkJggg==') 2x);
            height: 50px;
            padding-top: 20px;
            width: 41px;
        }
        .icon-offline {
            content: -webkit-image-set(
                url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAvAgMAAADlfsA8AAAADFBMVEX39/f////39/dTU1NOmoBdAAAAAnRSTlMAAHaTzTgAAAB6SURBVHherc2xDUIxDIThE6UbVmEZ9nN9TUZgJWo3Ju8UhGIrHX/1FScdnr82K+PMoZizbozLsfw+OP9mkpvNARuabB6OG6fIZr4uozi4noqTYrcKHoxi63ZodLBG0a0R0c2M5Uw5Z3rzoavqwNf3CGybKH4gYXTq6wPqOghb2tvIFQAAAABJRU5ErkJggg==') 1x,
                url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFgAAABeAgMAAADaoju6AAAADFBMVEX39/f////39/dTU1NOmoBdAAAAAnRSTlMAAHaTzTgAAACDSURBVHhe7dIhDgQhAEPR6jV7urnkN3PEbkIIICCQSdfNl8/UVNe0DA/R0p7BtTzjFkesLO8nX6YUYpj8IcO48Ie+GGa4XSqYYwO4lWUPSpjH4I8s5Vg8Z7RhkeeZE2fRNc/Y5oRtu7NrC26bCKNWktEp2xueT5on/F2yLQlAQGWt+AcZixZ9AfIcYgAAAABJRU5ErkJggg==') 2x);
            height: 47px;
            margin: 0 0 40px;
            position: relative;
            width: 44px;
        }
        #content-top {
            margin: 20px;
        }
        #help-box-outer {
            -webkit-transition: height ease-in 218ms;
            overflow: hidden;
        }
        #help-box-inner {
            background-color: #f9f9f9;
            border-top: 1px solid #EEE;
            color: #444;
            padding: 20px;
            text-align: start;
        }
        #suggestion {
            margin-top: 15px;
        }
        #short-suggestion {
            margin-top: 5px;
        }
        #sub-frame-error-details {
            color: #8F8F8F;
            /* Not done on mobile for performance reasons. */
            text-shadow: 0 1px 0 rgba(255,255,255,0.3);
        }
        [jscontent=failedUrl] {
            overflow-wrap: break-word;
        }
        #search-container {
            /* Prevents a space between controls. */
            display: flex;
            margin-top: 20px;
        }
        #search-box {
            border: 1px solid #cdcdcd;
            flex-grow: 1;
            font-size: 16px;
            height: 26px;
            margin-right: 0;
            padding: 1px 9px;
        }
        #search-box:focus {
            border: 1px solid rgb(93, 154, 255);
            outline: none;
        }
        #search-button {
            border: none;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            box-shadow: none;
            display: flex;
            height: 30px;
            margin: 0;
            padding: 0;
            width: 60px;
        }
        #search-image {
            content:
                -webkit-image-set(
                    url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAPCAQAAAB+HTb/AAAArElEQVR4Xn3NsUoCUBzG0XvB3U0chR4geo5qihpt6gkCx0bXFsMERWj2KWqIanAvmlUUoQapwU6g4l8H5bd9Z/iSPS0hu/RqZqrncBuzLl7U3Rn4cSpQFTeroejJl1Lgs7f4ceDPdeBMXYp86gaONYJkY83AnqHiGk9wHnjk16PKgo5N9BUCkzPf5j6M0PfuVg5MymoetFwoaKAlB26WdXAvJ7u5mezitqtkT//7Sv/u96CaLQAAAABJRU5ErkJggg==') 1x,
                    url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAeCAQAAACVzLYUAAABYElEQVR4Xr3VMUuVURzH8XO98jgkGikENkRD0KRGDUVDQy0h2SiC4IuIiktL4AvQt1CDBJUJwo1KXXS6cWdHw7tcjWwoC5Hrx+UZgnNO5CXiO/75jD/+QZf9MzjskVU7DrU1zRv9G9ir5hsA4Nii83+GA9ZI1nI1D6tWAE1TRlQMuuuFDthzMQefgo4nKr+f3dIGDdUUHPYD1ISoMQdgJgUfgqaKEOcxWE/BVTArJBvwC0cGY7gNLgiZNsD1GP4EPVn4EtyLYRuczcJ34HYMP4E7GdajDS7FcB48z8AJ8FmI4TjouBkzZ2yBuRQMlsButIZ+dfDVUBqOaIHvavpLVHXfFmAqv45r9gEHNr3y3hcAfLSgSMPgiiZR+6Z9AMuKNAwqpjUcA2h55pxgAfBWkYRlQ254YMJloaxPHbCkiGCymL5RlLA7GnRDXyuC7uhicLoKdRyaDE5Pl00K//93nABqPgBDK8sfWgAAAABJRU5ErkJggg==') 2x);
            margin: auto;
        }
        .hidden {
            display: none;
        }
        .suggestions {
            margin-top: 18px;
        }
        .suggestion-header {
            font-weight: bold;
            margin-bottom: 4px;
        }
        .suggestion-body {
            color: #777;
        }
        .error-code {
            color: #A0A0A0;
            margin-top: 15px;
        }
        /* Increase line height at higher resolutions. */
        @media (min-width: 641px) and (min-height: 641px) {
            #help-box-inner {
                line-height: 18px;
            }
        }
        /* Decrease padding at low sizes. */
        @media (max-width: 640px), (max-height: 640px) {
            body {
                margin: 15px;
            }
            h1 {
                margin: 10px 0 15px;
            }
            #content-top {
                margin: 15px;
            }
            #help-box-inner {
                padding: 20px;
            }
            .suggestions {
                margin-top: 10px;
            }
            .suggestion-header {
                margin-bottom: 0;
            }
            .error-code {
                margin-top: 10px;
            }
        }
        /* Don't allow overflow when in a subframe. */
        html[subframe] body {
            overflow: hidden;
        }
        #sub-frame-error {
            -webkit-align-items: center;
            background-color: #DDD;
            display: -webkit-flex;
            -webkit-flex-flow: column;
            height: 100%;
            -webkit-justify-content: center;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }
        #sub-frame-error:hover {
            background-color: #EEE;
        }
        #sub-frame-error-details {
            margin: 0 10px;
            visibility: hidden;
        }
        /* Show details only when hovering. */
        #sub-frame-error:hover #sub-frame-error-details {
            visibility: visible;
        }
        /* If the iframe is too small, always hide the error code. */
        /* TODO(mmenke): See if overflow: no-display works better, once supported. */
        @media (max-width: 200px), (max-height: 95px) {
            #sub-frame-error-details {
                display: none;
            }
        }
        /* details-button is special; it's a <button> element that looks like a link. */
        #details-button {
            background-color: inherit;
            background-image: none;
            border: none;
            box-shadow: none;
            min-width: 0;
            padding: 0;
            text-decoration: underline;
        }
        /* Styles for platform dependent separation of controls and details button. */
        .suggested-left > #control-buttons,
        .suggested-right > #details-button  {
            float: left;
        }
        .suggested-right > #control-buttons,
        .suggested-left > #details-button  {
            float: right;
        }
        #details-button.singular {
            float: none;
        }
        #buttons::after {
            clear: both;
            content: '';
            display: block;
            width: 100%;
        }
        /* Offline page */
        .offline .interstitial-wrapper {
            color: #2b2b2b;
            font-size: 1em;
            line-height: 1.55;
            margin: 100px auto 0;
            max-width: 600px;
            width: 100%;
        }
        .offline .runner-container {
            height: 150px;
            max-width: 600px;
            overflow: hidden;
            position: absolute;
            top: 10px;
            width: 44px;
            z-index: 2;
        }
        .offline .runner-canvas {
            height: 150px;
            max-width: 600px;
            opacity: 1;
            overflow: hidden;
            position: absolute;
            top: 0;
        }
        .offline .controller {
            background: rgba(247,247,247, .1);
            height: 100vh;
            left: 0;
            position: absolute;
            top: 0;
            width: 100vw;
            z-index: 1;
        }
        #offline-resources {
            display: none;
        }
        @media (max-width: 400px) {
            .suggested-left > #control-buttons,
            .suggested-right > #control-buttons {
                float: none;
                margin: 50px 0 20px;
            }
        }
        @media (max-height: 350px) {
            h1 {
                margin: 0 0 15px;
            }
            .icon-offline {
                margin: 0 0 10px;
            }
            .interstitial-wrapper {
                margin-top: 5%;
            }
            .nav-wrapper {
                margin-top: 30px;
            }
        }
        /*For tinybox */
        .tbox {position:absolute; display:none; padding:14px 17px; z-index:900;}
        .tinner { background:#fff url(http://www.skipser.com/activetemplate/images/loading1.gif) no-repeat 50% 50%;  border:10px solid #e3e3e3; border-radius:5px;}
        .tcontent {background-color:#fff; border-radius:5px;}
        .tmask {position:absolute; display:none; top:0px; left:0px; height:100%; width:100%; background:#000; z-index:800}
        .tclose {position:absolute; top:0px; right:0px; width:30px; height:30px; cursor:pointer; background:url(http://www.skipser.com/activetemplate/images/close.png) no-repeat}
        .tclose:hover {background-position:0 -30px}
        canvas { z-index:-10;overflow-y: auto;}
        input[type=text] {
            padding:5px;
            border:2px solid #ccc;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
        input[type=text]:focus {
            border-color:#333;
        }
        input[type=submit] {
            padding:5px 15px;
            background:#ccc;
            border:0 none;
            cursor:pointer;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
    </style>

    <link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
</head>
<body id="t">
<div id="content">
    Trex game is a running dinosaur compatible with all mobile phones. Jump the dino over the cacti to gain points. Android phones are better suited because chrome browser comes by default. The game needs a wekit browser to run. For best experience, use phones like Sony Xperia, Moto e, Moto X, Xiomi, Azus and Micromax. For mobile phones playing in landscape mode is best to get more play width. The game is pretty basic in terms of hardware demands so can be played in any entry level android phones. Any graphics processor available in even the cheapest phones would be sufficient to run the game without any lags. To start the game, press "Space" or tap on the screen which will also jump the Trex dino. Keep tapping to jump the dino any time over the cacti and other hurdles that come along. So play <a href="http://www.trex-game.skipser.com/">Trex Game</a> and enjoy.
</div><script type="text/javascript">document.getElementById("content").style.display="none";</script>
<div id="main-frame-error" class="interstitial-wrapper" jstcache="0">
    <div class="softhidewhenplaying">
        <div class="onlyforchrome" style="font-weight:bold; font-size:30px;text-align:center;color:#777E8C;"><span style="color:#6cf">GR</span><span style="color:#ff6680">E</span>G Runner</div>
        <div class="onlyforchrome" style="margin-top:5px;text-align:center;color:#8a8a8a;margin-bottom:80px; font-size:.7em;line-height:1.2em;"><span id='firsttimeinfo'>Press "Space" to start the game and jump your GREG. Use down arrow (&darr;) to duck.</span></div>
    </div>
    <div id="main-frame-notchrome" style="display:none; margin-top:50px;">Sorry, this game only runs on the webkit browsers like chrome!!</div>
    <div id="offline-resources" jstcache="0">
        <img id="offline-resources-1x" src="data:image/png;base64,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" jstcache="0">
        <img id="offline-resources-2x" src="data:image/png;base64,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" jstcache="0">
        <img id="offline-resources-2x" src="data:audio/mpeg;base64,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" jstcache="0">
        <template id="audio-resources" jstcache="0">
            <audio id="offline-sound-press" src="data:audio/mpeg;base64,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" i18n-processed=""></audio>
            <audio id="offline-sound-hit" src="data:audio/mpeg;base64,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" i18n-processed=""></audio>
            <audio id="offline-sound-reached" src="data:audio/mpeg;base64,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" i18n-processed=""></audio>
        </template>
    </div>
    <script type="text/javascript">
        if (browserCompatible) {
            new Runner('.interstitial-wrapper');
        } else {
            document.getElementById("main-frame-notchrome").style.display="";
        }
    </script>
    <!-- <div class="onlyforchrome hidewhenplaying" style="margin-top:-5px auto 0;visibility:hidden;">
        <table style="margin:0 auto;"><tr>
            <td colspan="3"><strong><span style="font-size:20px;"><span style="color:#ff6680">S</span>hare <span style="color:#6cf">S</span>core</span></strong></td>
            </tr><tr>
            <td><a href="#" onclick="shareScore('fb')"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAAllBMVEUAAAAxMTEyMjIxMTEwMDAxMTExMTEwMDAwMDAxMTEyMjIxMTExMTEwMDAyMjIxMTEyMjIyMjIxMTEyMjIyMjIxMTEzMzMxMTH////29vb9/f12dnZTU1NFRUU6Ojrb29sjIyPz8/M+Pj41NTUoKCjt7e3l5eVjY2NHR0cUFBTf39/Pz8/BwcGzs7OoqKhra2srKysbGxtexureAAAAFnRSTlMA+vCqk4guIgQD381QFF1doN7OUxSfA9r/KwAAATlJREFUKM91k9d6gzAMhc1MzEzSFBm37Mzuvv/LVQxLQL+cC5D0YyTbkjCSRz91AssKnMSPpVhp4x2AFHqbJX2yMZpNQtOOZnDrEiK5W6K7icL8uTPcBROHUWMGd8oLGdH2FWXWR0PNNpd0fddKncvpexvrlx4QLj8U4ovB4ElxPIxOn7I4a119fnWmljAWPtqGF7nKX04njvgiAcpcl4i/6xoolAqH7PKt0UrnTdVRyBEBgMEXpbEyVZm/AwTCIrvN1cCrmnJbiMm5/zQ6v95/0SYcAG/s1lcOGS/Yc2noFiPmgMMbQ/3DKR3LAvOxxOEDDMOhSu/xak8uLvSmlBowXSgqIr/DXmgJQ7RoJm4lbiZuRa5ofD9vuZGztcBFSorGMQAUjcFyiEIk6yFiydhP+hHcO+lsBP8AhhY/reDaq5AAAAAASUVORK5CYII=" /></a></td>
            <td><a href="#" onclick="shareScore('tw')"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAAtFBMVEUAAAAxMTEzMzMyMjIzMzMzMzMyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIvLy8yMjIyMjIzMzMyMjIzMzP///8xMTEvLy8oKCgsLCxEREQ6Ojo2Njbh4eGcnJz8/Pz39/fExMSpqalQUFDn5+fS0tK4uLigoKCAgIBeXl5JSUnu7u7W1tbNzc2/v7+ysrKvr6+JiYlycnJiYmJXV1dUVFQ+Pj75+fmQkJCPj494eHh1dXVpaWlPb4DRAAAAE3RSTlMAB5H76ejddkUXEsZUhAHFhYNTYotokQAAAW1JREFUKM99k9d6gzAMhTFhJRDaxpbNTIDsNHt0vv97FQ9iUvr1XBn/HFm2JOMu5Jm+1etZvukh47f6ro0BCwG23X7YhihwONRyAqTp4Bl3NBzcqdm2NieYiiPp7fpl/ODBC5SC8gchz9nhHxQUZbcYoiiCeun0a+wKGidU0PRjV5Tn1Tnlv7v1yTbwiO+LhDto/kYIyYpjTOtdGxmeNB3Ifs0oxBPCNc4TcZhnmMBxlJNxll/ZhQhtKxDbpuHLdC8zQiabbCbxXmXqG5bASa6iSrxgEltGT2B25KDRZsmwUK/G0n5o4dcrbbAlF9Fqq3GpYoNl+A2eaXOlzPAkL4YBWDWfSDr9ZFhhs3mWeF19ZYJmKi/5LMjm+HYqp9K6+9bURrIkAOtlOS+K+eKURrq4ri4oY0kcpywChZqChqodgDeChEoj2UxD3FVteUHdVtQydasO//AO/huD0cMghfUQqbxADFEDOiP41B7BH9OkO8fsAV6TAAAAAElFTkSuQmCC" /></a></td>
            <td><a href="#" onclick="shareScore('gp')"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAA0lBMVEUAAAAxMTEzMzMyMjIzMzMzMzMyMjIyMjIyMjIyMjIyMjIyMjIyMjIvLy8yMjIzMzMzMzMyMjIzMzMyMjIzMzMyMjIzMzMzMzMxMTH///8sLCwuLi5CQkL8/PxcXFwoKCg6Ojrv7+9SUlLBwcFkZGT29vbZ2dm3t7eurq6cnJxtbW0/Pz/l5eXc3NyAgIBhYWFMTExISEg2NjbFxcW5ubmysrKoqKhZWVnf39/T09PQ0NClpaWHh4d6enpzc3NNTU3n5+fS0tLLy8u8vLyVlZWRkZEeyNlzAAAAF3RSTlMAB5H76ejGRRcSdoRUAd3e3IWDd1VT3RxW5RsAAAGJSURBVCjPdVPXdoJAFASkWWOiZu9dQIqiKNbYYk/9/1/KLnhkiTpPexhmdvYW6QrZUHS1UFB1xZCl/zAbGgGSAIhWMqsiKTefOJmhVhEcis/kBuXilVXy0vQG5cLLolbUp/7NRAtAKQUQ9RWez3ziZ4va7W7bdi2BfzUZ3eAnGgwWvfde52cupiixmzVgxsOtgxzO11vGgyZLBnfujhD95f7bwUMahFrJX4akMPG8g9jf2LHdniRiiIdTfgBF0rk1YmcGAJZFLGCgwXbtcb0uqQS8AYYTCjBrc2xiLziOOt0Z06tSgYDdx/GUEjcKHQb/FHwgw9IGUsjRDjos4in+Xfm99dFjtGBOJ9Fq5aPfpW4wjvjdoIrRqOvaIY48sM77g8eT6/mHBTt0Ipd9d2nyQEUsy7ofIo7FshqsqITbfzqYYDelGauxlpaEliwGZ5pviWTWHjW0zhtareTGQUArHaYyuQMgL7IwijdQslEt39EWhTWo1PIG9VZukapmSbvkgmSJRPLxCv4BBFlLUu48HDsAAAAASUVORK5CYII=" /></a></td>
        </tr></table>
    </div>
    <div class="onlyforchrome">
        <div id="socialbutts" class="addthis_toolbox addthis_default_style hidewhenplaying" style="text-align:center; padding-top:25px;">
            <table border="0" style="margin:0 auto;">
                <tr>
                    <td>
                        <div class="fb-like" data-href="http://www.trex-game.skipser.com/" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"data-width="150"></div>
                    </td>
                    <td style="padding-left:15px;">
                        <g:plusone size="medium" href="http://www.trex-game.skipser.com"></g:plusone>
                    </td>
                    <td><a href="https://twitter.com/share" class="twitter-share-button" data-text="Google Chrome's running T-rex dino game Hacked!" data-url="http://www.trex-game.skipser.com" data-via="skipser" data-hashtags="chrome,trexgame"></a></td>
                </tr>
            </table>
        </div>
    </div>
</div> -->
    <!--
            <div id='playstorelink' class='hidewhenplaying'>
                <div style="width:336px;bottom:5px;position:fixed;left:50%;margin-left:-168px;">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-5926018077342185" data-ad-slot="8376304861"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                </div>
            </div> -->

    <!--   <div style="position:fixed; bottom:30px; left:10px; font-size:.9em;font-family:VT323;" class='hidewhenplaying'>
          <strong><u>Toppers This Week</u></strong>
          <div id='worldrecordsholder' />
      </div>

      <div style="position:fixed; bottom:30px; right:10px;" class='hidewhenplaying'>
          <a target="_blank" href="https://play.google.com/store/apps/details?id=com.skipser.roborunner"><img src="play_store.png" style="height:55px; margin-left:10px;" /></a>
      </div>
-->
    <script type="text/javascript">
        if (!browserCompatible) {
            hideClass("onlyforchrome");
            document.getElementById('playstorelink').style.visibility = 'visible';
            document.getElementById('playstorelink').style.display = 'inline';
        }
    </script>
    <div id="fb-root"></div>
    <script type="text/javascript">
        var addthis_config = {"data_track_clickback":true};
        function LoadAllJs() {
            var fileref=document.createElement('script');
            fileref.setAttribute("type","text/javascript");
            fileref.setAttribute("src", 'http://apis.google.com/js/plusone.js');
            document.body.appendChild(fileref);
            fileref=document.createElement('script');
            fileref.setAttribute("type","text/javascript");
            fileref.setAttribute("src", 'http://platform.twitter.com/widgets.js');
            document.body.appendChild(fileref);
        }
        // Check for browser support of event handling capability
        if (window.addEventListener)
            window.addEventListener("load", LoadAllJs, false);
        else if (window.attachEvent)
            window.attachEvent("onload", LoadAllJs);
        else window.onload = LoadAllJs;

        window.fbAsyncInit = function() {
            FB.init({appId: '258792220800726', status: true, cookie: true, xfbml: true});
            if(typeof addFbInits == 'function') {addFbInits();}
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1778569572376490";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        function preloader() {
            loadSess();
            loadWorldRecords();
            //if (document.images) {
            //  var img1 = new Image();
            //  var img2 = new Image();
            //  var img3 = new Image();

            //  img1.src = "/play_store.png";
            //  img2.src = "/qr_roborunner.png";
            //  img3.src = "/mobile6.gif";
            //}
        }
        function addLoadEvent(func) {
            var oldonload = window.onload;
            if (typeof window.onload != 'function') {
                window.onload = func;
            } else {
                window.onload = function() {
                    if (oldonload) {
                        oldonload();
                    }
                    func();
                }
            }
        }
        addLoadEvent(preloader);

        function loadWorldRecords() {
            //Load world records.
            //$.getJSON( "/game.cgi?act=getworldrecords&sessid="+sessid, function( data ) {
            $.getJSON( "/cache/worldrecord.txt?sessid="+(new Date()).getTime(), function( data ) {
                var tablehtml="<table style='font-size:.9em;'>"; var pos=1;
                $.each( data, function( key, val ) {
                    //alert("key: "+key+", val: "+val.score );
                    profileitem=val.name;
                    if (val.profile != '' && ValidURL(val.profile)) {
                        profileitem="<a target='_blank' href='"+val.profile+"'>"+val.name+"</a>";
                    }
                    tablehtml+="<tr><td>#"+pos+"</td><td>"+profileitem+"</td><td>: "+val.score+"</td></tr>";
                    pos++;
                });
                tablehtml+="</table>";
                //alert(tablehtml);

                $( tablehtml).appendTo("#worldrecordsholder");
            });
        }

        function loadSess() {
            if (! localStorage.sessid) {
                var d = new Date();
                localStorage.sessid = d.getTime();
            }
            sessid=localStorage.sessid;
        }

        function shareScore(platform) {
            var c=document.getElementById("gamecanvas");
            var cnvs=document.createElement('canvas');
            var ctx = cnvs.getContext('2d');
            cnvs.width=600
            cnvs.height=320
            ctx.drawImage(c, 0, 85);
            $.ajax({
                type: "POST",
                url: "/game.cgi",
                data: { act:"storeimg", img_data:cnvs.toDataURL()},
                cache: false,
                contentType: "application/x-www-form-urlencoded",
                success: function (result) {
                    if (platform == 'fb') {
                        FB.ui({
                            method: 'share',
                            href: 'http://www.trex-game.skipser.com/game.cgi?act=sharepage&score='+cscr+'&scoreimg='+result,
                        }, function(response){});
                    } else if (platform == 'tw') {
                        var mtitle='I scored '+cscr+' in chrome\'s Trex game - ';
                        window.open("https://twitter.com/share?url="+escape('http://www.trex-game.skipser.com/game.cgi?act=sharepage&score='+cscr+'&scoreimg='+result)+"&text="+mtitle, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;
                    } else if (platform == 'gp') {
                        window.open('https://plus.google.com/share?url='+escape('http://www.trex-game.skipser.com/game.cgi?act=sharepage&score='+cscr+'&scoreimg='+result), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                    }
                }
            });
        }

        function ValidURL(str) {
            var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
                '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|'+ // domain name
                '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
                '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
                '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
                '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
            return pattern.test(str);
        }

        function postCSF() {
            var frm = $('#clsf');
            var mthd = frm.attr('method');
            var actn = frm.attr('action');
            var data1 = frm.serialize();
            TINY.box.hide();
            $.ajax({
                type: mthd,
                url: actn,
                data: data1,
                success: function (data) {
                    loadWorldRecords();
                }
            });
            $('#worldrecordsholder').html('');
        }
    </script>
    <div id="preload"></div>
    <div id='preload-01'></div>
    <div id='preload-02'></div>
    <div id='preload-03'></div>
    <div class="retour_accueil">
        <a class="button-simple" href="/">Retour à l’accueil</a>
    </div>
</div>
<?php
include 'footer.php';
?>
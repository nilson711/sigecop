    function number_format(number,decimals,dec_point,thousands_sep){number=(number+'').replace(/[^0-9+\-Ee.]/g,'');var n=!isFinite(+number)?0:+number,prec=!isFinite(+decimals)?0:Math.abs(decimals),sep=(typeof thousands_sep==='undefined')?',':thousands_sep,dec=(typeof dec_point==='undefined')?'.':dec_point,s='',toFixedFix=function(n,prec){var k=Math.pow(10,prec);return''+Math.round(n*k)/k;};s=(prec?toFixedFix(n,prec):''+Math.round(n)).split('.');if(s[0].length>3){s[0]=s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g,sep);}
    if((s[1]||'').length<prec){s[1]=s[1]||'';s[1]+=new Array(prec-s[1].length+1).join('0');}
    return s.join(dec);}
    function str_pad(input,pad_length,pad_string,pad_type){var half='',pad_to_go;var str_pad_repeater=function(s,len){var collect='',i;while(collect.length<len){collect+=s;}
    collect=collect.substr(0,len);return collect;};input+='';pad_string=pad_string!==undefined?pad_string:' ';if(pad_type!='STR_PAD_LEFT'&&pad_type!='STR_PAD_RIGHT'&&pad_type!='STR_PAD_BOTH'){pad_type='STR_PAD_RIGHT';}
    if((pad_to_go=pad_length-input.length)>0){if(pad_type=='STR_PAD_LEFT'){input=str_pad_repeater(pad_string,pad_to_go)+input;}else if(pad_type=='STR_PAD_RIGHT'){input=input+str_pad_repeater(pad_string,pad_to_go);}else if(pad_type=='STR_PAD_BOTH'){half=str_pad_repeater(pad_string,Math.ceil(pad_to_go/2));input=half+input+half;input=input.substr(0,pad_length);}}
    return input;}
    function str_replace(e,t,n,r){var i=0,s=0,o="",u="",a=0,f=0,l=[].concat(e),c=[].concat(t),h=n,p=Object.prototype.toString.call(c)==="[object Array]",d=Object.prototype.toString.call(h)==="[object Array]";h=[].concat(h);if(r){this.window[r]=0}for(i=0,a=h.length;i<a;i++){if(h[i]===""){continue}for(s=0,f=l.length;s<f;s++){o=h[i]+"";u=p?c[s]!==undefined?c[s]:"":c[0];h[i]=o.split(l[s]).join(u);if(r&&h[i]!==o){this.window[r]+=(o.length-h[i].length)/l[s].length}}}return d?h:h[0]}
    function strstr(haystack,needle,bool){var pos=0;haystack+='';pos=haystack.indexOf(needle);if(pos==-1){return false;}else{if(bool){return haystack.substr(0,pos);}else{return haystack.slice(pos);}}}

    function setlocale(a,b){var c="",d=[],e=0,f=this.window.document,g=function B(a){if(a instanceof RegExp)return new RegExp(a);if(a instanceof Date)return new Date(a);var b={};for(var c in a)"object"==typeof a[c]?b[c]=B(a[c]):b[c]=a[c];return b},i=function(a){return 1!==a?1:0},j=function(a){return a>1?1:0};try{this.php_js=this.php_js||{}}catch(x){this.php_js={}}var y=this.php_js;if(y.locales||(y.locales={},y.locales.en={LC_COLLATE:function(a,b){return a==b?0:a>b?1:-1},LC_CTYPE:{an:/^[A-Za-z\d]+$/g,al:/^[A-Za-z]+$/g,ct:/^[\u0000-\u001F\u007F]+$/g,dg:/^[\d]+$/g,gr:/^[\u0021-\u007E]+$/g,lw:/^[a-z]+$/g,pr:/^[\u0020-\u007E]+$/g,pu:/^[\u0021-\u002F\u003A-\u0040\u005B-\u0060\u007B-\u007E]+$/g,sp:/^[\f\n\r\t\v ]+$/g,up:/^[A-Z]+$/g,xd:/^[A-Fa-f\d]+$/g,CODESET:"UTF-8",lower:"abcdefghijklmnopqrstuvwxyz",upper:"ABCDEFGHIJKLMNOPQRSTUVWXYZ"},LC_TIME:{a:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],A:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],b:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],B:["January","February","March","April","May","June","July","August","September","October","November","December"],c:"%a %d %b %Y %r %Z",p:["AM","PM"],P:["am","pm"],r:"%I:%M:%S %p",x:"%m/%d/%Y",X:"%r",alt_digits:"",ERA:"",ERA_YEAR:"",ERA_D_T_FMT:"",ERA_D_FMT:"",ERA_T_FMT:""},LC_MONETARY:{int_curr_symbol:"USD",currency_symbol:"$",mon_decimal_point:".",mon_thousands_sep:",",mon_grouping:[3],positive_sign:"",negative_sign:"-",int_frac_digits:2,frac_digits:2,p_cs_precedes:1,p_sep_by_space:0,n_cs_precedes:1,n_sep_by_space:0,p_sign_posn:3,n_sign_posn:0},LC_NUMERIC:{decimal_point:".",thousands_sep:",",grouping:[3]},LC_MESSAGES:{YESEXPR:"^[yY].*",NOEXPR:"^[nN].*",YESSTR:"",NOSTR:""},nplurals:i},y.locales.en_US=g(y.locales.en),y.locales.en_US.LC_TIME.c="%a %d %b %Y %r %Z",y.locales.en_US.LC_TIME.x="%D",y.locales.en_US.LC_TIME.X="%r",y.locales.en_US.LC_MONETARY.int_curr_symbol="USD ",y.locales.en_US.LC_MONETARY.p_sign_posn=1,y.locales.en_US.LC_MONETARY.n_sign_posn=1,y.locales.en_US.LC_MONETARY.mon_grouping=[3,3],y.locales.en_US.LC_NUMERIC.thousands_sep="",y.locales.en_US.LC_NUMERIC.grouping=[],y.locales.en_GB=g(y.locales.en),y.locales.en_GB.LC_TIME.r="%l:%M:%S %P %Z",y.locales.en_AU=g(y.locales.en_GB),y.locales.C=g(y.locales.en),y.locales.C.LC_CTYPE.CODESET="ANSI_X3.4-1968",y.locales.C.LC_MONETARY={int_curr_symbol:"",currency_symbol:"",mon_decimal_point:"",mon_thousands_sep:"",mon_grouping:[],p_cs_precedes:127,p_sep_by_space:127,n_cs_precedes:127,n_sep_by_space:127,p_sign_posn:127,n_sign_posn:127,positive_sign:"",negative_sign:"",int_frac_digits:127,frac_digits:127},y.locales.C.LC_NUMERIC={decimal_point:".",thousands_sep:"",grouping:[]},y.locales.C.LC_TIME.c="%a %b %e %H:%M:%S %Y",y.locales.C.LC_TIME.x="%m/%d/%y",y.locales.C.LC_TIME.X="%H:%M:%S",y.locales.C.LC_MESSAGES.YESEXPR="^[yY]",y.locales.C.LC_MESSAGES.NOEXPR="^[nN]",y.locales.fr=g(y.locales.en),y.locales.fr.nplurals=j,y.locales.fr.LC_TIME.a=["dim","lun","mar","mer","jeu","ven","sam"],y.locales.fr.LC_TIME.A=["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"],y.locales.fr.LC_TIME.b=["jan","f\xe9v","mar","avr","mai","jun","jui","ao\xfb","sep","oct","nov","d\xe9c"],y.locales.fr.LC_TIME.B=["janvier","f\xe9vrier","mars","avril","mai","juin","juillet","ao\xfbt","septembre","octobre","novembre","d\xe9cembre"],y.locales.fr.LC_TIME.c="%a %d %b %Y %T %Z",y.locales.fr.LC_TIME.p=["",""],y.locales.fr.LC_TIME.P=["",""],y.locales.fr.LC_TIME.x="%d.%m.%Y",y.locales.fr.LC_TIME.X="%T",y.locales.fr_CA=g(y.locales.fr),y.locales.fr_CA.LC_TIME.x="%Y-%m-%d"),!y.locale){y.locale="en_US";var z="http://www.w3.org/1999/xhtml",A="http://www.w3.org/XML/1998/namespace";f.getElementsByTagNameNS&&f.getElementsByTagNameNS(z,"html")[0]?f.getElementsByTagNameNS(z,"html")[0].getAttributeNS&&f.getElementsByTagNameNS(z,"html")[0].getAttributeNS(A,"lang")?y.locale=f.getElementsByTagName(z,"html")[0].getAttributeNS(A,"lang"):f.getElementsByTagNameNS(z,"html")[0].lang&&(y.locale=f.getElementsByTagNameNS(z,"html")[0].lang):f.getElementsByTagName("html")[0]&&f.getElementsByTagName("html")[0].lang&&(y.locale=f.getElementsByTagName("html")[0].lang)}if(y.locale=y.locale.replace("-","_"),y.locale in y.locales||y.locale.replace(/_[a-zA-Z]+$/,"")in y.locales&&(y.locale=y.locale.replace(/_[a-zA-Z]+$/,"")),y.localeCategories||(y.localeCategories={LC_COLLATE:y.locale,LC_CTYPE:y.locale,LC_MONETARY:y.locale,LC_NUMERIC:y.locale,LC_TIME:y.locale,LC_MESSAGES:y.locale}),null===b||""===b)b=this.getenv(a)||this.getenv("LANG");else if("[object Array]"===Object.prototype.toString.call(b))for(e=0;e<b.length;e++){if(b[e]in this.php_js.locales){b=b[e];break}if(e===b.length-1)return!1}if("0"===b||0===b){if("LC_ALL"===a){for(c in this.php_js.localeCategories)d.push(c+"="+this.php_js.localeCategories[c]);return d.join(";")}return this.php_js.localeCategories[a]}if(!(b in this.php_js.locales))return!1;if("LC_ALL"===a)for(c in this.php_js.localeCategories)this.php_js.localeCategories[c]=b;else this.php_js.localeCategories[a]=b;return b}
    function date(a,b){var d,e,c=this,f=["Sun","Mon","Tues","Wednes","Thurs","Fri","Satur","January","February","March","April","May","June","July","August","September","October","November","December"],g=/\\?(.?)/gi,h=function(a,b){return e[a]?e[a]():b},i=function(a,b){for(a=String(a);a.length<b;)a="0"+a;return a};return e={d:function(){return i(e.j(),2)},D:function(){return e.l().slice(0,3)},j:function(){return d.getDate()},l:function(){return f[e.w()]+"day"},N:function(){return e.w()||7},S:function(){var a=e.j(),b=a%10;return 3>=b&&1==parseInt(a%100/10,10)&&(b=0),["st","nd","rd"][b-1]||"th"},w:function(){return d.getDay()},z:function(){var a=new Date(e.Y(),e.n()-1,e.j()),b=new Date(e.Y(),0,1);return Math.round((a-b)/864e5)},W:function(){var a=new Date(e.Y(),e.n()-1,e.j()-e.N()+3),b=new Date(a.getFullYear(),0,4);return i(1+Math.round((a-b)/864e5/7),2)},F:function(){return f[6+e.n()]},m:function(){return i(e.n(),2)},M:function(){return e.F().slice(0,3)},n:function(){return d.getMonth()+1},t:function(){return new Date(e.Y(),e.n(),0).getDate()},L:function(){var a=e.Y();return a%4===0&a%100!==0|a%400===0},o:function(){var a=e.n(),b=e.W(),c=e.Y();return c+(12===a&&9>b?1:1===a&&b>9?-1:0)},Y:function(){return d.getFullYear()},y:function(){return e.Y().toString().slice(-2)},a:function(){return d.getHours()>11?"pm":"am"},A:function(){return e.a().toUpperCase()},B:function(){var a=3600*d.getUTCHours(),b=60*d.getUTCMinutes(),c=d.getUTCSeconds();return i(Math.floor((a+b+c+3600)/86.4)%1e3,3)},g:function(){return e.G()%12||12},G:function(){return d.getHours()},h:function(){return i(e.g(),2)},H:function(){return i(e.G(),2)},i:function(){return i(d.getMinutes(),2)},s:function(){return i(d.getSeconds(),2)},u:function(){return i(1e3*d.getMilliseconds(),6)},e:function(){throw"Not supported (see source code of date() for timezone on how to add support)"},I:function(){var a=new Date(e.Y(),0),b=Date.UTC(e.Y(),0),c=new Date(e.Y(),6),d=Date.UTC(e.Y(),6);return a-b!==c-d?1:0},O:function(){var a=d.getTimezoneOffset(),b=Math.abs(a);return(a>0?"-":"+")+i(100*Math.floor(b/60)+b%60,4)},P:function(){var a=e.O();return a.substr(0,3)+":"+a.substr(3,2)},T:function(){return"UTC"},Z:function(){return 60*-d.getTimezoneOffset()},c:function(){return"Y-m-d\\TH:i:sP".replace(g,h)},r:function(){return"D, d M Y H:i:s O".replace(g,h)},U:function(){return d/1e3|0}},this.date=function(a,b){return c=this,d=void 0===b?new Date:b instanceof Date?new Date(b):new Date(1e3*b),a.replace(g,h)},this.date(a,b)}							
    function mktime(){var a=new Date,b=arguments,c=0,d=["Hours","Minutes","Seconds","Month","Date","FullYear"];for(c=0;c<d.length;c++)if("undefined"==typeof b[c])b[c]=a["get"+d[c]](),b[c]+=3===c;else if(b[c]=parseInt(b[c],10),isNaN(b[c]))return!1;return b[5]+=b[5]>=0?b[5]<=69?2e3:b[5]<=100?1900:0:0,a.setFullYear(b[5],b[3]-1,b[4]),a.setHours(b[0],b[1],b[2]),(a.getTime()/1e3>>0)-(a.getTime()<0)}

    
    var acessibilidadeContraste;
    var acessibilidadeFontSize = typeof acessibilidadeFontSize != 'undefined' ? acessibilidadeFontSize : 4;
    var elAcessibilidade = new Array();
    
    $("h1, h2, h3, h4, h5, p, a, li").each(function(i, el) {
        elAcessibilidade.push({'el': el, 'value':$(this).css('font-size')});
    });
	
    var meses = {
      '1': 'Janeiro', 
      '2': 'Fevereiro', 
      '3': 'Março', 
      '4': 'Abril', 
      '5': 'Maio', 
      '6': 'Junho', 
      '7': 'Julho', 
      '8': 'Agosto', 
      '9': 'Setembro', 
     '10': 'Outubro', 
     '11': 'Novembro', 
     '12': 'Dezembro'};
	

	
    /**
     * Modifica as informações do calendário
     *
     * @param int mes
     * @param int ano
     * @return void
     */
    function modificarCalendario(mes, ano) 
    {
            var dias = date("t", mktime(0,0,0,mes,'01', ano)),
                udmp = parseInt(date("t", mktime(0,0,0, (mes-1 != 0 ? mes-1 : 12), '01', (mes-1) != 0 ? ano : ano-1 ))),
                html = '<tr>';

        for (i = 1; i <= dias; i++) {                
            var diadasemana = parseInt(date("w", mktime(0, 0, 0, mes, i, ano))),
                            contador	= 0;

            if (i == 1) {
                while (contador < diadasemana) {
                                    html += '<td class="inactive">'+ (udmp - diadasemana + contador + 1) +'</td>';
                    contador++;
                }
            }

                    html += '<td class="">'+
                                            '<span class="'+ (i == date("j") ? 'active' : '') +'">'+
                                                    '&nbsp;'+ i +'&nbsp;'+
                                            '</span>'+
                    '</td>';

            if (diadasemana == 6) {
                html += '</tr><tr>';
            }
        }

        html += '</tr>';
        
        return html;
    }
	
	
    $(document).on("click", ".seta-azul.esquerda, .seta-azul.direita", function() {
        var ano = parseInt($(".area-central .azul").attr('data-id')),
            mes = parseInt($(".area-central .verde").attr('data-id')),
            novo = parseInt($(this).hasClass('esquerda') ? ano - 1 : ano + 1),
            conteudo = modificarCalendario(mes, novo);
        $(".area-central .azul").attr('data-id', novo).text(novo);
        $("#miniCalendario table tbody").html(conteudo);
    });
	
	
    $(document).on("click", ".seta-verde.esquerda, .seta-verde.direita", function() {
        var ano = parseInt($(".area-central .azul").attr('data-id')),
            mes = parseInt($(".area-central .verde").attr('data-id')),
            novo = parseInt($(this).hasClass('esquerda') ? (mes - 1 >= 1 ? mes - 1 : 12) : (mes + 1 <= 12 ? mes + 1 : 1)),
            conteudo = modificarCalendario(novo, ano);
        $(".area-central .verde").attr('data-id', novo).text(meses[novo]);
        $("#miniCalendario table tbody").html(conteudo);
    });
	
	
    $(document).on("click", ".miniCalendario table tbody tr td span", function() {
        var dia         = $(this).text().replace(/\D/g, ''),
            mes         = str_pad($(".miniCalendario .area-central .verde").attr('data-id').replace(/\D/g, ''), 2, '0', 'STR_PAD_LEFT') +'_'+ $(".area-central .verde").text().trim().charAt(0).toUpperCase()+$(".area-central .verde").text().trim().slice(1),
            ano         = $(".miniCalendario .area-central .azul").attr('data-id').replace(/\D/g, ''),
            data        = ano +'/'+ mes,
            html        = '<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selecione um arquivo</option>',
            dtSlc       = new Array();
            
        $(".miniCalendario table .active").removeClass("active");
        $(this).addClass("active");
        $("#dodf-file-select").html(html);
        
        $.get("http://www.dodf.df.gov.br/listar", {'dir': data}, function(r) {
            for (var i in r.data) {
                diaSelecionado = ano+ str_pad($(".miniCalendario .area-central .verde").attr('data-id').replace(/\D/g, ''), 2, '0', 'STR_PAD_LEFT') +(dia < 10 ? '0'+dia : dia);
                if (i.substr(0, 8) == diaSelecionado ) {
                    dtSlc.push(r.data[i]);
                }
            }
            
            for (var x in dtSlc) {
                $.get("http://www.dodf.df.gov.br/listar", {'dir': data+'/'+dtSlc[x]}, function(r2) {
                    for (var z in r2.data) {
                        html += '<option value="'+ r2.data[z].replace('Ã§', 'ç') +'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+ r2.data[z].split('/')[3] +'</option>';
                    }
                    $("#dodf-file-select").html(html);
                });
            }            
	});
    }).on("change", "#dodf-file-select", function() {
        var arquivo = $(this).val().split('/').pop(),
            pasta   = $(this).val().replace(arquivo, '');
        window.open("http://www.dodf.df.gov.br/index/visualizar-arquivo/?pasta="+pasta+"&arquivo="+arquivo);
    });
    
    
    $( window ).load(function() {
        $(".btnOpen").each(function(i, e) {
            var heightPanelHead = $(this).parents(".panel-heading").height();
                tamanhoReal     = heightPanelHead == 19 ? '-21px' : (heightPanelHead == 38 ? '-30px' : ( heightPanelHead == 57 ? '-30px' : '-40px'))
            $(this).css({'margin-top': tamanhoReal});
        });
    });
    
    
    
    
    
    /** modificando os valores referentes ao font-size */
    $(document).on("change", "#sizeFont", function() {
        var value = $(this).val();
        acessibilidadeFontSize=value;
        acessibilidade(value);
        $.post('/', {'acessibilidade': 1, 'acessibilidade_font': value}, function(r) {console.log(r)})
    });
    
    $(document).on("click", '#checkboxAcessibilidade', function() {
        var checked = $(this).is(":checked");
        if (checked) {
            acessibilidadeContraste=1;
            $('body').prepend('<link id="styleAcessibilidade" href="/wp-conteudo/themes/site-secretarias/style-contraste.css" rel="stylesheet" type="text/css"/>');
            $(".info-contraste").html('Alto contraste ligado');
            $.post('/', {acessibilidade: 1, acessibilidade_contraste: 1}, function(r) {console.log(r)});
        } else {
            acessibilidadeContraste=0;
            $("#styleAcessibilidade").remove(); 
            $(".info-contraste").html('Alto contraste desligado');         
            $.post('/', {acessibilidade: 1, acessibilidade_contraste: 0}, function(r) {console.log(r)});
        }
     });
    
    /**
     * Função que aumenta|reduz a fonte da página, muda o contraste do site.
     * 
     * @param {string}
     */
    function acessibilidade(novoValor) 
    {
        soma = (novoValor < 4) ? ((((4-novoValor)*-1)*2)) : ((novoValor > 4) ?((novoValor-4)*2) : 0);
        
        for (var i in elAcessibilidade) {
            $(elAcessibilidade[i].el).css('font-size', (parseInt(elAcessibilidade[i].value.replace('px', ''))+soma)+'px')
        }
    }
    
    
    $('#popoverAcessibilidade').popover({
		html: true,
		content: '<div class="cntAcessibilidade">'+
					 '<div class="titulo">Tamanho de fonte</div>'+
					 '<div class="aMenor">A</div>'+
					 '<div class="ranger"><input type="range" id="sizeFont" min="1" max="8" value="4" step="1" /></div>'+
					 '<div class="aMaior">A</div>'+
					 '<div class="clearfix"></div>'+
					 '<div class="bg-verde">'+
						  '<div class="areacheckbox">'+
							  '<div class="checkboxCampoInterno">'+
								  '<input type="checkbox" value="1" id="checkboxAcessibilidade" name="" '+ ((typeof acessibilidadeContraste != 'undefined' && acessibilidadeContraste == 1) ? 'checked' : '') +' />'+
								  '<label for="checkboxAcessibilidade"></label>'+
							  '</div>'+
						  '</div>'+
						  '<div class="info-contraste">Alto contraste '+ ((typeof acessibilidadeContraste != 'undefined' && acessibilidadeContraste == 1) ? 'ligado' : 'desligado') +'</div>'+
					 '</div>'+
				 '</div>'
    }).click(function() {
        $(".cntAcessibilidade").parents('.popover-content').css({"padding": "9px 0px 0px 0px"})
							   .parents(".popover").css({"padding" : "0px"});
        $("#checkboxAcessibilidade").prop('checked', (typeof acessibilidadeContraste != 'undefined' && acessibilidadeContraste == 1));
        $(".info-contraste").html('Alto contraste '+ ((typeof acessibilidadeContraste != 'undefined' && acessibilidadeContraste == 1) ? 'ligado' : 'desligado'));
        $("#sizeFont").val(acessibilidadeFontSize);
    });
    $('body').on('click', function (e) {
        $('[data-toggle="popover"]').each(function () {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });    
    
	
    $(document).on("click", ".lnk-mais-destaques", function() {
            window.location = '/index.php/category/destaques/';
    });

    
    $(document).on("click", ".panel-heading", function() {
        var idPanel = $(this).attr('id').replace(/\D/g, '');

        if (!$('#collapse'+idPanel).is(":visible")) {
            $('.collapse').collapse('hide');
            $('#collapse'+idPanel).collapse('toggle');
            $('.btnOpen span').removeClass('icon-minus').addClass('icon-plus');
            $("#heading"+idPanel+" .btnOpen span").removeClass('icon-plus').addClass('icon-minus');
        } else {
            $('#collapse'+idPanel).collapse('toggle');
            $("#heading"+idPanel+" .btnOpen span").removeClass('icon-minus').addClass('icon-plus');
        }
    });   

    
    /**
     * Itens relacionados ao comunicar erro
     */ 
    $(document).on("click", "#mesmaPagina-nao", function() {
        $(".areaLocalizacao").removeClass('hidden');
        $("#erroLocalizacao").html('');
    }).on("click", "#mesmaPagina-sim", function() {
        $(".areaLocalizacao").addClass('hidden');
        $("#erroLocalizacao").html(window.location.href);
    }).on("click", "#comunicarErro", function () {
        $("#systemModal").modal('show');
        $("#erroLocalizacao").html(window.location.href);
        $(".alert-msg").hide();
        $(".input-erro").removeClass('.input-erro');
        $("#mesmaPagina-sim").prop("checked", true);
        $(".areaLocalizacao").addClass('hidden');
    }).on("click", ".btn-close-errors, .btnCancelar", function() {
        $("#systemModal").modal("hide");
        $("#erroLocalizacao").html(window.location.href);
    }).on("click", ".btnEnviar", function() {
        var descricao = $("#erroDescricao").val().replace(/(<([^>]+)>)/ig, "").trim(),
            local     = $("#erroLocalizacao").val().replace(/(<([^>]+)>)/ig, "").trim();
            
        //Remove erros e verifica novamente o envio do formulário    
        $(".btnEnviar").button('loading');
        $(".alert-msg").hide();
        $("#systemModal textarea").removeClass('input-erro');            
            
        //Envia o formulário se estiver tudo correto    
        if (descricao != '' && local != '') {
            $.ajax({
                url: '/index.php/teste-form-erros/#wpcf7-f1413-p1841-o1',
                type: 'POST',
                data: $("#formComunicarErros").serialize(),
                success: function(data) {
                    if (data.mailSent == true) {
                        alert('Email enviado com sucesso.');
                        $("#systemModal textarea").html('');
                        $("#systemModal").modal("hide");
                        $(".btnEnviar").button('reset');
                    } else {
                        alert('Seu email não pode ser enviado certifique-se de preencher todos os campos e marcar a caixa "Não sou um robô".');
                        $(".btnEnviar").button('reset');
                    }
                },
                error: function(data) {
                    alert('Devido a um problema interno não foi possível enviar sua mensagem.');
                    $(".btnEnviar").button('reset');
                }
            }, 'html');
        } else {
            if (descricao == '') {$("#erroDescricao").addClass('input-erro');}
            if (local == '') {$("#erroLocalizacao").addClass('input-erro');}
            $(".alert-msg").show();
            $(".btnEnviar").button('reset');
        }
    });
    
    
    $(document).ready(function(){
    $(".panel-default > .panel-heading").click(function(){
        $(this).toggleClass("cagado");
    });
    });
    
//    JQUERY - AGENDA

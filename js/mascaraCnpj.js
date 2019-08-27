function fMascCnpj(objeto,mascara){
    obj=objeto
    masc=mascara
    setTimeout("fMascEx()",1)
}

function fMascEx(){
    obj.value=masc(obj.value)
}
function mCnpj(cnpj){
    cnpj=cnpj.replace(/\D/g,"")
    cnpj=cnpj.replace(/(\d{2})(\d)/,"$1.$2")
    cnpj=cnpj.replace(/(\d{3})(\d)/,"$1.$2")
    cnpj=cnpj.replace(/(\d{3})(\d)/,"$1/$2")
    cnpj=cnpj.replace(/(\d{4})(\d{1,2})$/,"$1-$2")
    return cnpj
}
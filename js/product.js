document.getElementById("showcart").style.display = "none";

var giohang = new Array();

function themvaogiohang(x) {
    var sph = x.parentElement.children;

    var hinh = sph[0].children[0].src;
    var gia = sph[2].children[1].innerText;
    var tensp = sph[1].innerText;
    var soluong = parseInt(sph[3].children[0].value);
    var sanpham = new Array(hinh, gia, tensp, soluong);
    alert('Đã thêm ' + tensp + ' vào giỏ hàng');

    giohang.push(sanpham);

    console.log(giohang);
    showcountsp();

    sessionStorage.setItem("giohang", JSON.stringify(giohang));
}

function showcountsp() {
    document.getElementById("countsp").innerHTML = giohang.length;
}

function showmycart() {
    var ttg = "";
    var tong = 0;
    for (let i = 0; i < giohang.length; i++) {
        var tt = parseInt(giohang[i][1]) * parseInt(giohang[i][3]);
        tong += tt;
        ttgh += '<tr>' +
            '<td><img src="' + giohang[i][0] + '" width="120px" height="80px"></td>' +
            '<td>' + giohang[i][1] + '</td>' +
            '<td>' + giohang[i][2] + '</td>' +
            '<td>' + giohang[i][3] + '</td>' +
            '<td><div>  ' + tt + '  </div></td>' +
            '</tr> ';
    }
    ttgh += '<tr>' +
        '<th colspan="5">Tổng đơn hàng</th>' +
        '<th>' +
        '   <div>' + tong + '</div>' +
        '</th>' +
        '</tr>';
    document.getElementById("mycart").innerHTML = ttg;

}

function showcart() {

    var x = document.getElementById("showcart");
    if (x.style.display == "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
        showmycart();
    }
}

function xoasp(x) {
    
    var tr = x.parentElement.parentElement;
    let total = document.getElementById("total").childNodes[1].innerText

    let gia = tr.childNodes[2].innerText
    let soluong = tr.childNodes[3].innerText

    console.log(Number.parseInt(gia), soluong, total)

    document.getElementById("total").childNodes[1].innerText = Number(total) - (Number.parseInt(gia) * Number(soluong))
    

    console.log(tr)
    var tensp = tr.children[0].src;
    
    tr.remove();
    for (let i = 0; i < giohang.children; i++) {
        if (giohang[i][1] == tensp) {
            giohang.splice(i, 1);
            
        }
    }
}
// function format_curency(tong) {
//             tong.value = tong.value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
//         }

function showgiohang_trangthanhtoan() {
    var gh = sessionStorage.getItem("giohang");
    var giohang = JSON.parse(gh);
    var ttgh = "";
    var tong = 0;
    for (let i = 0; i < giohang.length; i++) {
        var tt = parseInt(giohang[i][1]) * parseInt(giohang[i][3]); 
        tong += tt;
        // var tongdd;
        // tongdd = (tong*1000).toFixed(3).replace('.', '.');
        ttgh += '<tr>' +
            '<td data-th="Product"><img src="' + giohang[i][0] + '" class="img-responsive" width="120"></td>' +
            '<td data-th="Name">' +
            '    <h4 class="nomargin">' + giohang[i][2] + '</h4></td>' +
            '<td data-th="Price">' + giohang[i][1] + '</td>' +
            '<td data-th="Quantity">' + giohang[i][3] + '</td>' +
            '<td data-th="Subtotal" class="text-center">' + tt + '.000đ</td>' +
            '<td> <div onclick="xoasp(this)"><i class="fa fa-trash" ></i></div></td>' +
            '</tr>';
    }

    ttgh += '<tr>' +

        '<td><a href="javascript:history.go(-1)" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>' +
        '</td>' +

        '<td colspan="2" class="hidden-xs"></td>' +

        '<td class="hidden-xs text-center" style="font-size:14px; padding-top: 9px;"><strong id="total">TỔNG ĐƠN: <span style="font-size:1.8rem; color:red">' + tong + '</span><span style="font-size:1.8rem; color:red">.000đ</span></strong>' +
        '</td>' +
        '<td> <input class="btn btn-success btn-block" type="submit" name"dathang" value="Đặt hàng"></i></button>' +

        '</td>' +
        '</tr>';

    document.getElementById("mycart").innerHTML = ttgh;
    
}



/*Đăng nhập*/
const passField = document.querySelector("input");
    const showBtn = document.querySelector("span i");
    showBtn.onclick = (()=>{
        if(passField.type === "password"){
            passField.type = "text";
            showBtn.classList.add("hide-btn");
        }else{
            passField.type = "password";
            showBtn.classList.remove("hide-btn");
        }
        });
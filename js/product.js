
var app = angular.module("myapp", []);
// hứng dữ liệu khi click chuyển qua giỏ hàng
const listCart = []; //

const timViTri = function (id) {
  return listCart.findIndex(function (item) {
    return item.id === id;
  });
};

app.controller("ctrl1", function ($scope) {
    $scope.user1 = [
        {
            hinh: "../deadlinewebmaychu/img/chon2.jpg",
            name: " SNEAKER BUDI 002 ",
            gia: " 900.000 ",
            title: " Thiết kế trang nhã, chất liệu thoáng mát... ",
            title1: " Thiết kế trang nhã, chất liệu thoáng mát...title:Thiết kế trang nhã, chất liệu thoáng mát...  "

        },
        {

            hinh: "../deadlinewebmaychu/img/chon3.jpg",
            name: " SNEAKER DIPO 003 ",
            gia: " 800.000 ",
            title: " Thiết kế phong cách, chất liệu êm chân, dễ vệ sinh... ",
            title1: " Thiết kế trang nhã, chất liệu thoáng mát...title:Thiết kế trang nhã, chất liệu thoáng mát... "


        },

    ];

}


);
app.controller("ctrl2", function ($scope) {
    $scope.user2 = [
        {
            hinh: "../deadlinewebmaychu/img/chon4.jpg",
            name: " SNEAKER KATO 004 ",
            gia: " 650.000 ",
            title: " Phong cách năng động, êm châm... ",
            title1: " Thiết kế trang nhã, chất liệu thoáng mát...title:Thiết kế trang nhã, chất liệu thoáng mát... "

        },
        {

            hinh: "../deadlinewebmaychu/img/chon5.jpg",
            name: " SSNEAKER HATBI 005 ",
            gia: " 650.000 ",
            title: " Màu sắc hài hòa, dễ phối đồ... ",
            title1: " Thiết kế trang nhã, chất liệu thoáng mát...title:Thiết kế trang nhã, chất liệu thoáng mát... "

        },
        {
            hinh: "../deadlinewebmaychu/img/chon6.jpg",
            name: " Giày THỂ THAO 006 ",
            gia: " 500.000 ",
            title: " Thiết kế trang nhã... ",
            title1: " Thiết kế trang nhã, chất liệu thoáng mát...title:Thiết kế trang nhã, chất liệu thoáng mát... "

        },

    ];
    
});

// ctrl3


app.controller("ctrl3", function ($scope) {
    $scope.user3 = [
        {
            id: "1",
            hinh: "../deadlinewebmaychu/img/chon2.jpg",
            name: "BUDI 002",
            title: " chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. "
                + " Năng động, thể thao, và có nhiều mẫu mã ",
            date: "_  19/10/2020 ",
            gia: " 500.000 ",

        },
        {
            id: "2",
            hinh: "../deadlinewebmaychu/img/g225.jpg",
            name: "KIOT 011",
            title: " chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. "
                + " Năng động, thể thao, và có nhiều mẫu mã ",
            date: "_  19/10/2020 ",
            gia: " 500.000 ",

        },
        {
            id: "3",
            hinh: "../deadlinewebmaychu/img/g2225.jpg",
            name: "SU 061",
            title: " chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. "
                + " Năng động, thể thao, và có nhiều mẫu mã ",
            date: "_  19/10/2020 ",
            gia: " 600.000 ",

        },
        {
            id: "4",
            hinh: "../deadlinewebmaychu/img/g3225.jpg",
            name: "KKER 023",
            title: " chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. "
                + " Năng động, thể thao, và có nhiều mẫu mã ",
            date: "_  20/10/2020 ",
            gia: " 700.000 ",

        },
        {
            id: "5",
            hinh: "../deadlinewebmaychu/img/chon8.jpg",
            name: "MOI 061",
            title: " chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. "
                + " Năng động, thể thao, và có nhiều mẫu mã ",
            date: "_  20/10/2020 ",
            gia: " 800.000 ",


        },
        {
            id: "6",
            hinh: "../deadlinewebmaychu/img/chon9.jpg",
            name: "SIAS 004",
            title: " chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. "
                + " Năng động, thể thao, và có nhiều mẫu mã ",
            date: "_  23/10/2020 ",
            gia: " 900.000 ",

        },
        {
            id: "7",
            hinh: "../deadlinewebmaychu/img/chon2.jpg",
            name: " SNEAKER BUDI 002 ",
            gia: " 900.000 ",
            title: " Thiết kế trang nhã, chất liệu thoáng mát... ",
            title1: " Thiết kế trang nhã, chất liệu thoáng mát...title:Thiết kế trang nhã, chất liệu thoáng mát...  "

        },
        {
            id: "8",

            hinh: "../deadlinewebmaychu/img/chon3.jpg",
            name: " SNEAKER DIPO 003 ",
            gia: " 800.000 ",
            title: " Thiết kế phong cách, chất liệu êm chân, dễ vệ sinh... ",
            title1: " Thiết kế trang nhã, chất liệu thoáng mát...title:Thiết kế trang nhã, chất liệu thoáng mát... "


        },
        {
            id: "9",
            hinh: "../deadlinewebmaychu/img/chon4.jpg",
            name: " SNEAKER KATO 004 ",
            gia: " 650.000 ",
            title: " Phong cách năng động, êm châm... ",
            title1: " Thiết kế trang nhã, chất liệu thoáng mát...title:Thiết kế trang nhã, chất liệu thoáng mát... "

        },
        {
            id: "10",
            hinh: "../deadlinewebmaychu/img/chon5.jpg",
            name: " SSNEAKER HATBI 005 ",
            gia: " 650.000 ",
            title: " Màu sắc hài hòa, dễ phối đồ... ",
            title1: " Thiết kế trang nhã, chất liệu thoáng mát...title:Thiết kế trang nhã, chất liệu thoáng mát... "

        },
        {
            id: "11",
            hinh: "../deadlinewebmaychu/img/chon6.jpg",
            name: " Giày THỂ THAO 006 ",
            gia: " 500.000 ",
            title: " Thiết kế trang nhã... ",
            title1: " Thiết kế trang nhã, chất liệu thoáng mát...title:Thiết kế trang nhã, chất liệu thoáng mát... "

        },
        {
            id: "12",
            hinh: "../deadlinewebmaychu/img/chon9.jpg",
            name: "SIAS 004",
            title: " chất liệu dễ thấm hút, dễ mang và phối đồ, sành điệu, thời thượng, màu sắc trang nhã. "
                + " Năng động, thể thao, và có nhiều mẫu mã ",
            date: "_  23/10/2020 ",
            gia: " 900.000 ",

        },
    ];
    // Giỏ Hàng

    $scope.handleDetail = function (u) {
        phoneObj = u;
    };
    $scope.handleAddCart = function (id,name,hinh,gia) {
        // const cartObj = {
        //     id: cart.id,
        //     name: cart.name,
        //     hinh: cart.hinh,
        //     gia: cart.gia,
        //     soLuong: 1,
        // };
        const cartObj = {
            id: id,
            name: name,
            hinh: hinh,
            gia: gia,
            soLuong: 1,
        };
        let index = timViTri(cartObj.id);
        if (index !== -1) {
            listCart[index].soLuong += 1;
        } else {
            listCart.push(cartObj);
        }
    };
    
    $scope.listCart = [];
    $scope.listCart = listCart;

    $scope.sumGioHang = function () {
        return $scope.listCart.reduce(function (total, cart) {
            return (total += cart.soLuong);
        }, 0);
    };
    $scope.sumTien = function () {
        return $scope.listCart.reduce(function (total, cart) {
            return (total += cart.soLuong*parseInt(cart.gia));
        }, 0);
    };
    $scope.handleTangGiamSL = function (status, cart) {
        console.log(status, cart);
        let index = timViTri(cart.id);
        console.log(index);
        if (index !== -1) {
            if (status) {
                $scope.listCart[index].soLuong += 1;
            } else {
                if ($scope.listCart[index].soLuong > 1) {
                    $scope.listCart[index].soLuong -= 1;
                }
            }
        }
    };
    $scope.handleDeleteCart = function (cart) {
        console.log(cart);
        let index = timViTri(cart.id);
        if (index !== -1) {
            $scope.listCart.splice(index, 1);
        }
    }
   
});

// ctr4


  




app.controller("ctrl4", function ($scope) {
    $scope.user4 = [
        {
            name: " CÂU CHUYỆN TÌNH YÊU VÀ GIÀY ",
            hinh: "../deadlinewebmaychu/img/hinhft1.jpg",
            title: "_   20/10/2020",
            detail: "Bạn đừng vội vã đổi thay hay chọn bỏ rơi người mình đã nói yêu thương"
                + " và người đó cũng yêu thương bạn. Chỉ đơn giản, có những người tự lừa dối bản thân mình."
                + " Để rồi sau này phải hối tiếc vì nhận ra mình đã đánh mất đi hạnh phúc mình nên trân trọng. Đến một ngày nào đó,"
                + " người mà bạn rời bỏ lại là người luôn bao dung che chở đời bạn. Người mà bạn muốn có nhất trong cuộc sống này!...",
            link: "https://beautyme.com.vn/2020/10/01/cau-chuyen-tinh-yeu-va-giay/"


        },
        {
            name: " CÁCH PHỐI GIÀY VỚI QUẦN ÁO ",
            hinh: "../deadlinewebmaychu/img/hinhft2.jpg",
            title: "_   21/10/2020",
            detail: "Những nguyên tắc cần nhớ khi phối màu quần áo với giày "
                + " Dưới đây là những nguyên tắc phối đồ bạn buộc phải thuộc nếu muốn có một diện mạo hoàn chỉnh nhất: "
                + " Màu giày: Lựa chọn giày cùng màu hoặc cùng tone màu với quần hoặc một đôi giày sẫm màu hơn. "
                + " Màu của thắt lưng: phải phù hợp với đôi giày của bạn trừ khi bạn cố ý dùng thắt lưng tạo điểm nhấn, có nhiều họa tiết và màu sắc."
                + " Màu tất và giày: Nên chọn màu tất hợp với quần chứ không phải hợp với màu giày... ",
            link: "https://giayu2.com/phoi-do-voi-giay-the-thao/"


        },
        {
            name: " GIÀY VÀ CUỘC SỐNG ",
            hinh: "../deadlinewebmaychu/img/hinhft3.jpg",
            title: "_   22/10/2020",
            detail: "Hạnh phúc giống như đi một đôi giày "
                + " Vì trong cuộc đời của mỗi người, ai cũng phải trải qua rất nhiều những đôi giày. Nhưng không phải ai cũng chọn cho mình một đôi giày vừa ý "
                + " Cũng như mọi cô gái khác, tớ rất thích những đôi giày. Những đôi giày có thể không cần phải quá cầu kì..."
                + " Tớ thích cách so sánh giản dị như thế về hạnh phúc. Không phải những điều cao xa, viển vông và cần nhiều trí tưởng tượng. Hạnh phúc chỉ là thế, "
                + " là một đôi giày - một loại vật dụng hết rất thân thuộc trong đời sống hằng ngày...",
            link: "https://webgiay.com/giay-va-cuoc-song/"


        },


    ]



});









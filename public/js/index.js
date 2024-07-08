// ảnh
const thumb = document.querySelector(".thumb");
const iconColors = document.querySelectorAll(".group-icon-color div");

iconColors.forEach((element) => {
    element.addEventListener("click", function () {
        console.log(element.getAttribute("data-img"));
        thumb.src = element.getAttribute("data-img");
    });
});
// số lượng
document.addEventListener("DOMContentLoaded", function () {
    const qtyInput = document.querySelector(".qty");
    const qtyMinus = document.querySelector(".qtyminus");
    const qtyPlus = document.querySelector(".qtyplus");

    qtyMinus.addEventListener("click", function () {
        let currentValue = parseInt(qtyInput.value);
        if (currentValue > 1) {
            qtyInput.value = currentValue - 1;
        }
    });

    qtyPlus.addEventListener("click", function () {
        let currentValue = parseInt(qtyInput.value);
        qtyInput.value = currentValue + 1;
    });
});
// biểu đồ admin
// Dữ liệu mẫu cho biểu đồ

google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    const data = google.visualization.arrayToDataTable([
        ["Country", "Mhl"],
        ["ÁO SƠ MI", 54.8],
        ["QUẦN DÀI", 48.6],
        ["CHÂN VÁY", 44.4],
        ["ÁO THUN", 23.9],
        ["ÁO POLO", 14.5],
    ]);

    const options = {
        title: "THỐNG KÊ SẢN PHẨM ĐÃ BÁN THEO DANH MỤC",
    };

    const chart = new google.visualization.PieChart(
        document.getElementById("myChart")
    );
    chart.draw(data, options);
}

var checkAll = document.getElementById("checkAll");
checkAll &&
    (checkAll.onclick = function () {
        var e = document.querySelectorAll(
            '.form-check-all input[type="checkbox"]'
        );
        1 == checkAll.checked
            ? Array.from(e).forEach(function (e) {
                  (e.checked = !0),
                      e.closest("tr").classList.add("table-active");
              })
            : Array.from(e).forEach(function (e) {
                  (e.checked = !1),
                      e.closest("tr").classList.remove("table-active");
              });
    });
var DokumenList,
    perPage = 5,
    options = {
        valueNames: ["id", "no_dokumen", "kategori", "user_id", "divisi", "nama_dokumen", "revisi","keterangan"],
        page: perPage,
        pagination: !0,
        plugins: [ListPagination({ left: 2, right: 2 })],
    };
document.getElementById("DokumenList") &&
    (DokumenList = new List("DokumenList", options).on(
        "updated",
        function (e) {
            0 == e.matchingItems.length
                ? (document.getElementsByClassName(
                      "noresult"
                  )[0].style.display = "block")
                : (document.getElementsByClassName(
                      "noresult"
                  )[0].style.display = "none");
            var t = 1 == e.i,
                a = e.i > e.matchingItems.length - e.page;
            document.querySelector(".pagination-prev.disabled") &&
                document
                    .querySelector(".pagination-prev.disabled")
                    .classList.remove("disabled"),
                document.querySelector(".pagination-next.disabled") &&
                    document
                        .querySelector(".pagination-next.disabled")
                        .classList.remove("disabled"),
                t &&
                    document
                        .querySelector(".pagination-prev")
                        .classList.add("disabled"),
                a &&
                    document
                        .querySelector(".pagination-next")
                        .classList.add("disabled"),
                e.matchingItems.length <= perPage
                    ? (document.querySelector(
                          ".pagination-wrap"
                      ).style.display = "none")
                    : (document.querySelector(
                          ".pagination-wrap"
                      ).style.display = "flex"),
                e.matchingItems.length == perPage &&
                    document
                        .querySelector(".pagination.listjs-pagination")
                        .firstElementChild.children[0].click(),
                0 < e.matchingItems.length
                    ? (document.getElementsByClassName(
                          "noresult"
                      )[0].style.display = "none")
                    : (document.getElementsByClassName(
                          "noresult"
                      )[0].style.display = "block");
        }
    ));

document.querySelector(".pagination-next") &&
    document
        .querySelector(".pagination-next")
        .addEventListener("click", function () {
            !document.querySelector(".pagination.listjs-pagination") ||
                (document
                    .querySelector(".pagination.listjs-pagination")
                    .querySelector(".active") &&
                    document
                        .querySelector(".pagination.listjs-pagination")
                        .querySelector(".active")
                        .nextElementSibling.children[0].click());
        }),
    document.querySelector(".pagination-prev") &&
        document
            .querySelector(".pagination-prev")
            .addEventListener("click", function () {
                !document.querySelector(".pagination.listjs-pagination") ||
                    (document
                        .querySelector(".pagination.listjs-pagination")
                        .querySelector(".active") &&
                        document
                            .querySelector(".pagination.listjs-pagination")
                            .querySelector(".active")
                            .previousSibling.children[0].click());
            });

           


// $(document).on('ajaxComplete ready', function () {
//     $('.modalMd').off('click').on('click', function () {
//         $('#modalMdContent').load($(this).attr('value'));
//         $('#modalMdTitle').html($(this).attr('title'));
//     });
// });


// Start MrModal
const openModal = document.getElementById("openMrModal");
const closeModal = document.getElementById("closeModal");
const modalContainer = document.getElementById("modalContainer");
const mrAddProduct = document.getElementById("mrAddProduct");
const mrModalNext = document.getElementById("mrModalNext");
const pushBook = document.getElementById("pushBook");
const mrProductImages = document.getElementById("mrProductImages");
const prevModal = document.getElementById("prevModal");

// Get globalProductBox element
const editModal = document.querySelectorAll(".editModal");
const closeEditModal = document.querySelectorAll(".closeEditModal");
const modalContainerEdit = document.getElementById("modalContainerEdit");

// Open MrModal
openModal.onclick = openMrModal(modalContainer);

editModal.forEach(
  (element) => (element.onclick = openMrModal(modalContainerEdit))
);

function openMrModal(modal) {
  return function () {
    modal.classList.add("show-modal");
  };
}

// Swipe Between Modal Content
mrModalNext.onclick = swipeModal(mrProductImages, mrAddProduct);
prevModal.onclick = swipeModal(mrAddProduct, mrProductImages);

function swipeModal(a, b) {
  return function () {
    a.classList.remove("hide");
    b.classList.add("hide");
  };
}

// Close MrModal
closeModal.onclick = closeMrModal(modalContainer);
pushBook.onclick = closeMrModal(modalContainer);
closeEditModal.forEach(
  (element) => (element.onclick = closeMrModal(modalContainerEdit))
);

function closeMrModal(modal) {
  return function () {
    modal.classList.remove("show-modal");
  };
}

// Hide modal on outside click
window.addEventListener("click", (e) =>
  e.target == modalContainerEdit
    ? modalContainerEdit.classList.remove("show-modal")
    : false
);
window.addEventListener("click", (e) =>
  e.target == modalContainer
    ? modalContainer.classList.remove("show-modal")
    : false
);

// End MrModal
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      document.querySelector("#img").setAttribute("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

document.addEventListener("click", function (event) {
  if (event.target.matches(".swal-button")) {
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
      },
    });

    Toast.fire({
      icon: "success",
      title: "تم الانضمام بنجاح",
    });
  }
});

document.getElementById("pushBook").addEventListener("click", function () {
  Swal.fire({
    title: "تم إنشاء الكتاب بنجاح",
    footer:
      '<a href="../../book-page.html" class="book-published global-btn-box">انتقل إلى الكتاب</a>',
    icon: "success",
    showConfirmButton: false,
  });
});

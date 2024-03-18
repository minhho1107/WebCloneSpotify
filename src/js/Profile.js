const actionButton = document.querySelector('.action-button');
const menuWrapper = document.querySelector('.menu-wrapper');

document.addEventListener('click', function(event) {
  if (event.target.closest('.action-button')) return;
  menuWrapper.style.display = 'none';
});

actionButton.addEventListener('click', function() {
  menuWrapper.style.display = menuWrapper.style.display === 'block' ? 'none' : 'block';
});


// click chọn file
const choosePhotoBtn = document.querySelector('.choose-photo-btn');

choosePhotoBtn.addEventListener('click', function() {
  const input = document.createElement('input');
  input.type = 'file';
  input.click();

  input.addEventListener('change', function() {
    const file = this.files[0];
    // do something with the selected file
  });
});


// const editDetailsBtn = document.querySelector('.edit-details-btn');
// const profileName = document.querySelector('.profile-name');

// editDetailsBtn.addEventListener('click', function() {
//   // create the new form
//   const form = document.createElement('form');
//   form.style.width = '400px';
//   form.style.height = '400px';
//   // append the form to the current HTML
//   document.body.appendChild(form);
// });

// profileName.addEventListener('click', function() {
//   // show the new for
//   const form = document.querySelector('form');
//   form.style.display = 'block';
// });

//  ==========================================================
// chồng html
// function showForm() {
//   console.log("Showing form...");
//   var form = document.getElementById("myForm");
//   form.style.display = "block";
// }

// function closeForm() {
//   console.log("Closing form...");
//   document.getElementById("myForm").style.display = "none";
// }

// Đóng form nếu người dùng click bất kỳ đâu trên màn hình
// window.onclick = function(event) {
//   console.log("Clicked on window...");
//   var form = document.getElementById("myForm");
//   if (event.target == form) {
//       console.log("Clicked on form...");
//       form.style.display = "none";
//   }
// 

// thay đổi tên:
  // var originalProfileName = document.querySelector('.profile-name').innerHTML;

  function showForm() {
  document.querySelector('#myForm').style.display = 'block';
  }
  function reloadPage() {
    location.reload();
}
  // document.querySelector('#myForm').addEventListener('submit', function(event) {
  // event.preventDefault(); // ngăn chặn trang web được tải lại
  // var newProfileName = document.querySelector('#myForm input').value;
  document.querySelector('#myForm').style.display = 'none'; // ẩn biểu mẫu
  // document.querySelector('.profile-name').innerHTML = newProfileName; // cập nhật nội dung phần tử profile-name
  // });

  // document.querySelector('#myForm button[type="submit"]').addEventListener('click', function() {
  // document.querySelector('#myForm').submit();
  // });

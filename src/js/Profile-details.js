// Lấy thẻ a có href="profile-details.html"
const profileLink = document.querySelector('a[href="profile-details.html"]');

// Lấy phần tử có class "profile-name"
const profileName = document.querySelector('.profile-name');

// Gán sự kiện click cho phần tử có class "profile-name"
profileName.addEventListener('click', function(event) {
  // Ngừng chuyển hướng đến trang profile-details.html
  event.preventDefault();

  // Tạo một div chứa nội dung của form từ file profile-details.html
  const modal = document.createElement('div');
  modal.classList.add('modal');

  // Sử dụng XMLHttpRequest để lấy nội dung form từ file profile-details.html
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      modal.innerHTML = xhr.responseText;
    }
  };
  xhr.open('GET', 'profile-details.html', true);
  xhr.send();

  // Thêm div chứa nội dung form vào trang html
  document.body.appendChild(modal);

  // Thêm sự kiện click cho thẻ a trong form để đóng form khi click vào
  modal.querySelector('a').addEventListener('click', function(event) {
    event.preventDefault();
    modal.remove();
  });
});

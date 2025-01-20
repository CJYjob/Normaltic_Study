<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>LAP</title>
    <style>
    body {
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* 전체 화면 높이 설정 */
        }
    #header {
            width: 100%;
            height: 50px;
            background-color: #d4edda; /* Light green background */
            display: flex;
            align-items: center;
            padding-top: 35px;
            padding-left: 20px;
            padding-bottom: 35px;
            padding-right: 20px;
            position: relative; /* 위치 설정 */
            color: black; /* Change text color to black for visibility */
        }
    #header a {
        color: black; /* 항목 글씨 색상 */
        text-decoration: none; /* 밑줄 제거 */
        }
    #header-logo {
            width: 50px; /* Logo width */
            height: 50px; /* Logo height */
            background-image: url('https://wrtn-image-user-output.s3.ap-northeast-2.amazonaws.com/6774bf5905a86755c6b681bf/89210770-1433-44a5-8c99-9f520124b80b.png'); /* 로고 이미지 */
            background-size: cover; /* 이미지 크기 조정 */
            margin-right: 20px;
        }
    #hamburger {
        cursor: pointer;
        margin-left: auto; /* 오른쪽 끝으로 이동 */
        }
    
    .sidebar {
        position: fixed;
        top: 0;
        left: -150px; /* 초기 위치 */
        width: 150px;
        height: 100%;
        background-color: #d4edda;
        transition: left 0.3s; /* 부드러운 이동 효과 */
        padding: 20px;
        box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
    .sidebar.active {
        left: 0; /* 사이드바가 활성화되면 보여줌 */
        }
    .sidebar h5 {
        background-color: #155724; /* Dark green background */
        color: white; /* White text */
        padding: 10px; /* 패딩 추가 */
        margin: -20px -20px 20px -20px; /* 테두리와 일치하도록 마진 조정 */
        }
    .sidebar h6 {
        background-color: #409060; /* light green background */
        color: white; /* White text */
        padding: 10px; /* 패딩 추가 */
        margin: -20px -20px 20px -20px; /* 테두리와 일치하도록 마진 조정 */
        }
    .sidebar ul {
        list-style-type: none; /* 기본 리스트 스타일 제거 */
        padding: 0; /* 패딩 제거 */
        }
    .sidebar li {
        margin-bottom: 5px; /* 항목 간 간격 추가 */
        }
    .sidebar a {
        color: black; /* 항목 글씨 색상 */
        text-decoration: none; /* 밑줄 제거 */
        }
    .nav-tabs {
        width: calc(100%); /* 좌우로 50px 추가 */
        margin-left: px; /* 왼쪽으로 50px 이동 */
        }
    .nav-item .nav-link {
        color: black; /* Default color for inactive tabs */
        background-color: #d4edda; /* Light green for inactive tabs */
        }
    .nav-item .nav-link.active {
        color: white; /* White text for active tab */
        background-color: #155724; /* Dark green for active tab */
        }
    .tab-content {
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        flex-grow: 1; /* 남은 공간을 차지하도록 설정 */
        min-height: calc(200px); /* 최소 높이 200px 설정 */
        max-height: calc(100vh - 60px - 50px - 15px); /* footer와 헤더를 고려한 최대 높이 설정 */
        overflow-y: auto; /* 내용이 넘칠 경우 스크롤 가능 */
        background-color: white; /* 탭 뒤의 배경을 흰색으로 설정 */
        }
    #footer {
        width: 100%;
        height: 50px;
        background-color: #d4edda; /* Light green background */
        display: flex;
        align-items: center;
        justify-content: flex-end; /* 오른쪽 정렬 */
        padding: 0 20px;
        color: black; /* Change text color to black for visibility */
        }
    </style>
</head>
<body>
    <div id="header">
        <div id="header-logo"></div> <!-- Logo space -->
        <h4 class="page-title">
        	<a href="#">연구실</a> > 
            <a href="#">Normaltic</a> > 
            <a href="#">WEEK 1</a>
      	</h4>
        <div id="hamburger" onclick="toggleSidebar()">☰</div> <!-- 햄버거 버튼 -->
    </div>

    <div class="sidebar" id="sidebar">
        <a href="#"><h5>Home</h5></a>
        <a href="#"><h5>Lap</h5></a>
        <ul class="list-unstyled">
            <a href="#"><li><h6>Normaltic</h6></li></a>
            	<ul>
                	<li><a href="#">WEEK 1</a></li>
                	<li><a href="#">WEEK 2</a></li>
                	<li><a href="#">WEEK 3</a></li>
                	<li><a href="#">WEEK 4</a></li>
                	<li><a href="#">WEEK 5</a></li>
                	<li><a href="#">WEEK 6</a></li>
                	<li><a href="#">WEEK 7</a></li>
                	<li><a href="#">WEEK 8</a></li>
                	<li><a href="#">WEEK 9</a></li>
                	<li><a href="#">WEEK 10</a></li>
                	<li><a href="#">WEEK 11</a></li>
                	<li><a href="#">WEEK 12</a></li>
                	<li><a href="#">WEEK 13</a></li>
                	<li><a href="#">WEEK 14</a></li>
                	<li><a href="#">WEEK 15</a></li>
                	<li><a href="#">WEEK 16</a></li>
                	<li><a href="#">WEEK 17</a></li>
                	<li><a href="#">WEEK 18</a></li>
                	<li><a href="#">WEEK 19</a></li>
                	<li><a href="#">WEEK 20</a></li>
                </ul>
            <li><a href="#"><h6>Egoing</h6></a></li>
            <li><a href="#"><h6>others</h6></a></li>
        </ul>
    </div>

    <div class="container mt-4">
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="WEEK 1-tab" data-toggle="tab" href="#stage_1" role="tab" aria-controls="stage_1" aria-selected="true" onclick="showTabContent('stage_1')">stage_1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="stage_2-tab" data-toggle="tab" href="#stage_2" role="tab" aria-controls="stage_2" aria-selected="false" onclick="showTabContent('stage_2')">stage_2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="stage_3-tab" data-toggle="tab" href="#stage_3" role="tab" aria-controls="stage_3" aria-selected="false" onclick="showTabContent('stage_3')">stage_3</a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="stage_1" role="tabpanel" aria-labelledby="stage_1-tab">
                <p>stage_1의 본문</p>
            </div>
            <div class="tab-pane fade" id="stage_2" role="tabpanel" aria-labelledby="stage_2-tab">
                <p>stage_2의 본문</p>
            </div>
            <div class="tab-pane fade" id="stage_3" role="tabpanel" aria-labelledby="stage_3-tab">
                <p>stage_3의 본문</p>
            </div>
        </div>
    </div>

    <div id="footer">
        <span>관리자 : 최준영 / 이메일 : cjyjob1993@gmail.com</span>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active'); // 사이드바 활성화/비활성화
        }

        function showTabContent(tabId) {
            const tabContents = document.querySelectorAll('.tab-pane');
            tabContents.forEach(content => {
                content.classList.remove('show', 'active');
            });
            document.getElementById(tabId).classList.add('show', 'active');
        }
    </script>
</body>
</html>

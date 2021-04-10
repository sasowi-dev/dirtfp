<?php include 'aboutpage.php';?>
<script>

  function metadatastd(appid, vendor, rate, information, sc1, sc2, sc3, sc4){
  document.getElementById("applicationid").innerHTML = appid;
  document.getElementById("vendor").innerHTML = vendor;
  document.getElementById("rating").innerHTML = rate;
  document.getElementById("applicationinfo").innerHTML = information;
  document.getElementById("screenshot1").setAttribute("src", sc1);
  document.getElementById("screenshot2").setAttribute("src", sc2);
  document.getElementById("screenshot3").setAttribute("src", sc3);
  document.getElementById("screenshot4").setAttribute("src", sc4);
  }
  function appdown(){
  window.open("https://flipstore.withun.link/app-cdn/neo.maru.apk","_self"); 
  }
  
  metadatastd('마루뷰어-만화뷰어,텍스트뷰어,스캔뷰어,소설뷰어','마루치아라치','4.8','안드로이드폰이나 웹하드에 저장되어 있는 텍스트 파일이나 만화 파일, 압축파일, PDF, epub파일을 열어서 마치 책처럼 볼 수 있게 해주는 앱입니다.<br><br>※ 기본적으로 컨텐츠(소설/만화 파일)을 제공하지 않습니다.<br>※ 구글플레이 프로텍트 인증 기기만 지원합니다.<br><br>주요기능은 다음과 같습니다.<br><br><br>1. 텍스트뷰어<br><br>  - txt, csv, smi, sub, srt지원<br>  - epub 지원(텍스트와 그림 표시)<br>  - 압축된 텍스트 열기(zip, rar, 7z) : 압축풀지 않고 바로 열기<br>  - 글꼴(붓글씨/명조) 변경, 크기/줄간격/여백 조정<br>  - 문자 인코딩 수정(자동/EUC-KR/UTF-8,...)<br>  - 글자색/배경색 변경<br>  - 페이지 넘기기 방법 : 화살표/화면탭/화면드래그/음량버튼<br>  - 넘기기 효과(애니메이션) : 말아넘기기,슬라이드,밀어내기,상하스크롤<br>  - 빠른탐색 : 탐색바,다이얼,페이지입력<br>  - 책갈피 추가/이름변경/정렬/조회<br>  - 읽어주기 : 언어선택, 속도조절, 특수문자/한자 제외 옵션<br>  - 슬라이드 쇼 지원 : 속도 조절<br>    ※ 유료버전에서 백그라운드 실행 가능<br>  - 텍스트 검색 : 하나씩, 모두검색<br>  - 텍스트 편집 : 수정, 새파일 추가<br>  - 텍스트 정렬 : 왼쪽, 양쪽 배분, 가로 2장보기<br>  - 2열 보기 지원<br>  - 문장정리, 파일 나누기(파일명 길게 탭)<br> <br><br>2. 만화뷰어<br><br>  - jpg, png, gif, bmp, webp, tiff, zip, rar, 7z, cbz, cbr, cb7, pdf 파일 지원<br>  - 압축된 그림 열기(zip, rar, 7z) : 압축풀지 않고 바로 열기<br>  - 이중압축 지원<br>  - pdf 지원 : 8배까지 확대션 및 확대시 선명 옵션<br>  - 좌우 순서/나누기 : 왼쪽 -&gt; 오른쪽, 오른쪽-&gt;왼쪽(일본식), 가로2장보기<br>  - 확대/축소/돋보기(애니메이션 미사용시)<br>  - 페이지 넘기기 방법 : 화살표/화면탭/화면드래그/음량버튼<br>  - 넘기기 효과(애니메이션) : 좌우스크롤, 상하스크롤, 웹툰스크롤<br>   ※ 웹툰스크롤은 매우 긴그림을 부드럽게 스크롤 가능<br>  - 빠른탐색 : 탐색바,다이얼,페이지입력<br>  - 책갈피 추가/이름변경/정렬/조회<br>  - 슬라이드쇼 지원 : 초단위로 설정<br>  - 그림 확대 유지<br>  - 움직이는 gif 지원<br>  - 그림 회전 지원(수동회전/JPEG 자동회전)<br><br><br>3. 파일기능<br><br>  - 열람 정보 색표시 : 빨강(최근), 녹색(일부 열람), 파랑(완독)<br>  - 미리보기 : 타일형(크게,작게), 자세히보기<br>  - 파일 확장자 선택<br>  - 정렬 : 이름,크기,날짜<br>  - 삭제(다중) 지원<br>  - 이름바꾸기 지원<br>  - 검색 지원 : 이름,내용,그림<br><br><br>4. 기타<br><br>  - 테마/색상 지원<br>  - 언어 선택 지원 ( 한국어, 중국어, 일본어, 영어 )<br>  - SFTP(secure file transport protocol) 지원<br>  - FTP(file transport protocol) 지원<br>  - SMB(윈도우 공유폴더,Samba) 지원<br>  - Google Drive 지원<br>  - Dropbox 지원<br>  - MS OneDrive 지원<br>  - 비밀번호 잠금<br>  - 노트9이상 spen 지원 : 페이지 넘기기, 슬라이드쇼 일시정지<br>  - 해드셋 버튼 지원 : 슬라이드쇼 일시정지<br>  - 미디어 버튼(블루투스 이어폰 등) 지원 : 읽어주기 일시정지 <br>  - 설정 백업/복구(마루,마루뷰어,아라 호환)<br>  - 바로가기 관리기능(예:네이버NDrive 앱바로가기 추가/삭제)<br><br>권한정보<br>- 파일읽기/쓰기(필수) : 내용을 읽거나 파일 수정/삭제<br>----<br>개발자 연락처 :<br>연구소 연락처 050-4866-3509','https://play-lh.googleusercontent.com/5DiNIxcIFMWe0MTWvkLNx5_DCdW8a-WXUkFB9Uqc1s2JqRtR-XkX5RcHeP9b9m2GpA=w720-h310-rw','https://play-lh.googleusercontent.com/W5CmUSfUj7lgeoAJxMbn7hZeJV_FznVJIK_A6JCJXD3h14jGZvU5nKA4xDBeyAwxXXA=w720-h310-rw','https://play-lh.googleusercontent.com/GXVBUQs9zNcAY3l88e_0ReHXOhZBM_uQGVo-kkPBC9QeoBcBaEyiRAltd1_vf9_iFqM=w720-h310-rw','https://play-lh.googleusercontent.com/3gzyy500NGCusZ1FQ0nFyytogKwrj99NZAg3v5_15vnjUqyAIpfLmaWym-Xa2c2AqnE=w720-h310-rw');
 </script>

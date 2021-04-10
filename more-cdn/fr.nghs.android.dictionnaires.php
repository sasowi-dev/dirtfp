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
  window.open("https://flipstore.withun.link/application-cdn/fr.nghs.android.dictionnaires.apk","_self"); 
  }
  
  metadatastd('오프라인 사전', 'NGHS.fr', '3.9', '오프라인 사전이 있으면 비행기 안, 해외 여행 중 또는 휴대폰 범위 밖에 있을 때와 같이 네트워크 접속이 없어도 사전을 볼 수 있습니다. <br><br>이 앱을 처음 실행할 때 SD 카드에 사전을 다운로드합니다. 다운로드하려는 사전(들)을 선택하십시오.<br><br>사전에서 고급 검색을 수행하십시오. 고급 검색은 크로스워드 퍼즐을 풀 때 편리합니다. <br><br>텍스트를 음성으로 전환하는 모듈을 사용하여 기기가 용어의 정의를 읽을 수 있습니다(일부 기기는 텍스트를 음성으로 전환하는 모듈을 지원하지 않으며 일부 언어에서는 제공되지 않을 수도 있음).<br><br>오프라인 사전은 광고를 제공하는 무료 애플리케이션입니다. 광고 없는 버전을 원하시면 오프라인 사전 프로를 선택하십시오.<br><br>다음을 포함하여 50가지 이상의 다언어 사전을 선택할 수 있습니다 (한국어,영어,불어,독어,러시아어...).<br><br>사전에 기여하고 자신의 노트를 추가할 수 있습니다.','https://play-lh.googleusercontent.com/cxHiGSXhBfQ3zmO9GCRLv-fmznrWgvmN5O6bI43zZNF_eMAzooaMeWBKXl58faGHzA=w720-h310-rw','https://play-lh.googleusercontent.com/lJFd7oVSBkeedih6xUJPtHmvdSO4rk3H6ATblks99ukrrZwtIJeBCLUtTSM94CB6BP_6=w720-h310-rw','https://play-lh.googleusercontent.com/5Hysx3A-_vABb29CcLe5APp3O_TY3r6EQJ5oxiHcjV_cOi3HUIwrbJ4BARlPbyhKxpZn=w720-h310-rw','https://play-lh.googleusercontent.com/T0C8hoGLLZP3Uo7KhUevyzAtACqeVE_bDLn8fNZzsoRR7oUbqYf0l9dY6kcWVyHpyPFo=w720-h310-rw');
</script>

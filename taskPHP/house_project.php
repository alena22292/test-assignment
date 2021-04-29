<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      .cls-1 {
        isolation: isolate;
      }

      .cls-2 {
        fill: none;
        stroke: #323232;
        stroke-linecap: round;
        stroke-linejoin: round;
      }
      .cls-3 {
        fill: #d8e3e7;
      }

      .house {
        opacity: 0.1;
        transition: 0.3s;
      }
      .house:hover {
        opacity: 0.8;
        stroke-width: 3px;
      }

      /*Animation*/

      .base:nth-of-type(2) .cls-2 {
        animation: shrink 2s linear 1;
      }
      .base:nth-of-type(4) .cls-2 {
        animation: shrink 2s linear 1;
        animation-delay: 0.65s;
      }
      .base:nth-of-type(6) .cls-2 {
        animation: shrink 2s linear 1;
        animation-delay: 0.25s;
      }
      .base:nth-of-type(8) .cls-2 {
        animation: shrink 2s linear 1;
        animation-delay: 0.95s;
      }
      .base:nth-of-type(10) .cls-2 {
        animation: shrink 2s linear 1;
        animation-delay: 0.35s;
      }
      .base:nth-of-type(12) .cls-2 {
        animation: shrink 2s linear 1;
        animation-delay: 0.55s;
      }
      .base:nth-of-type(14) .cls-2 {
        animation: shrink 2s linear 1;
        animation-delay: 0.15s;
      }
      .base:nth-of-type(16) .cls-2 {
        animation: shrink 2s linear 1;
        animation-delay: 0.80s;
      }
      .base:nth-of-type(18) .cls-2 {
        animation: shrink 2s linear 1;
        animation-delay: 0.35s;
      }
      .base:nth-of-type(20) .cls-2 {
        animation: shrink 2s linear 1;
        animation-delay: 0.15s;
      }

      @keyframes shrink {
        0%  {stroke: #d8e3e7; stroke-width: 5px; filter: drop-shadow( 3px 3px 2px rgba(255, 255, 255, 0.1)); stroke-opacity: 0.1;}
        25% {stroke: #d8e3e7; stroke-width: 5px; filter: drop-shadow( 3px 3px 2px rgba(255, 255, 255, 0.6)); stroke-opacity: 0.6;}
        50% {stroke: #d8e3e7; stroke-width: 5px; filter: drop-shadow( 3px 3px 2px rgba(255, 255, 255)); stroke-opacity:   1;}
        75% {stroke: #d8e3e7; stroke-width: 5px; filter: drop-shadow( 3px 3px 2px rgba(255, 255, 255, 0.6)); stroke-opacity: 0.6;}
        100%{stroke: #d8e3e7; stroke-width: 5px; filter: drop-shadow( 3px 3px 2px rgba(255, 255, 255, 0.1)); stroke-opacity: 0.1;}
        /* After the end animation base-line have to be unactive display:none; */
      }
    </style>
</head>
<body>
    <div class="main">
      <div class="hero-text">
        <h1>Project Name</h1>
        <p>Description</p>
      </div>
    </div>
    <div class="svgWrapper">
      <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2586 1582.75">

        <g id="bg">
          <image id="bg_png" data-name="bg png" class="cls-1" width="2586" height="1582" xlink:href="images/bg_png.png"/>
        </g>
        <g id="bn1_base" class="base" data-name="bn1 base">
          <path class="cls-2 start-animation" d="M96.05,776.2l486.1-216.05L906.25,662.2,356.1,900.2Q291.6,869.75,226.85,839,97.29,777.46,96.05,776.2Z"/>
        </g>
        <g id="bn1_house" class="house" data-name="bn1 house">
          <g>
            <path class="cls-3" d="M319.1,777.15q0-1-30-87l-191,85,254,124.05,215-92.05-7.8-32.25-9.15-2.75-120,53.05-1.15-.5.15.5-.15-.5L319.1,777.15m332.45-97.3L784.2,624.1l-199.05-63-96,42-22-8-90,33v-11l-10-3-20,9-1,15-65,23,8,29q30,86,30,87L429,824.7,397.1,706.15l-115-45,115,45,184-70-93-33,93,33,4.2,21.05,66.2,22.65M585.3,657.2l-4.2-21.05-184,70L429,824.7l1.15.5,120-53.05-10-53,53-23-7.8-38.95m-4.05,79,14.85-33.05,55.4-23.3-66.2-22.65,7.8,38.95-53,23L581.3,736.2m-31.15,35.95,9.15,2.75-.15-.75,7-4L581.3,736.2l-41.15-17.05,10,53m292.05-82,64-28-103-32Z"/>
            <path class="cls-2" d="M784.2,624.1l12-5,7,11,103,32-64,28-39-60m-19-6L651.55,679.85l-55.4,23.3-14.82,33.07-15.18,33.93-7,4,.18.75.82.25m-.82-.25,7.82,32.25-215,92.05-254-124.05,191-85-8-29,65-23,1-15,20-9,10,3v11l90-33,22,8,96-42,199,63m-495.1,66q30,86,30,87L429,824.7,397.1,706.15l-115-45M429,824.7l1.13.5,120-53.05-10-53,53-23-7.77-38.93-4.23-21.07-184,70m153,66,9.18,2.75m21.82-138.75-93-33m52,116,41.18,17.07M429,824.7l.13.5m222.4-145.35-66.17-22.63"/>
          </g>
        </g>
        <g id="bn2_base" class="base" data-name="bn2 base">
          <path class="cls-2 start-animation" d="M353.05,898.2,907.2,663.15l263,88.05-494.1,297Q595.66,1011,515,973.6,353.71,898.86,353.05,898.2Z"/>
        </g>
        <g id="bn2_house" class="house" data-name="bn2 house">
          <g>
            <path class="cls-3" d="M875.2,784.45l1,6.75q-24.75,11.5-49.4,22.9-47.22,21.81-48.65,22.1l48.05,19,6.95,58.5,28.55-14.25-2.5-18.25,74-40-2-22,20-13,16,8v9l67-37,51,17,85-52-265-89.05L841.45,688.6l25.75,39.55,8,56.3,29-15.25,53,19,1,21-1-21-130,67,130-67-53-19-29,15.25m-71.05-77.3-46,20,29,166.05-85,47-116-49-19-83-214,92,324.1,146,189-114-4.5-32.75L833.15,913.7l.05.5-.55-.25-.45.25.45-.25-45.5-19.75,45.5,19.8.5-.25-6.95-58.5-48.05-19q1.43-.29,48.65-22.1,24.65-11.4,49.4-22.9l-1-6.75-8-56.3-56.05,25,7.05,64-7.05-64-7-46.05m-81,5,39,65.05-86.6,38.2,25.6,123.8-25.6-123.8-6.4,2.8-72-115.05-32,71.05-6-1,8,35,19,83,116,49,85-47-29-166.05-35-15m39,65.05-39-65.05,41-20,40,15,7,46.05,56.05-25.05L841.45,688.6l-1.25.55,1.25-.55-45.3-69.45-199,84,72,115.05,6.4-2.8,86.6-38.2m-4-50.05,46-20-40-15-41,20Z"/>
            <path class="cls-2" d="M723.15,712.15l35,15,46-20-40-15-41,20,39,65.05-86.6,38.2,25.6,123.8m103-232.05,7,46.05,56.05-25.05-25.75-39.53-1.25.53m-13,166.05,130-67-53-19-29,15.25,1,6.75q-24.75,11.5-49.4,22.9-47.22,21.81-48.63,22.12l48,19,7,58.52,28.55-14.27-2.5-18.25,74-40-2-22,20-13,16,8v9l67-37,51,17,85-52-265-89.05-63.75,26.47-45.3-69.47-199,84,72,115.05,6.4-2.8M867.2,728.15l8,56.3m-13.5,115,4.5,32.75-189.05,114-324.1-146,214.05-92-8-35,6,1,32-71.05m161,24,29,166.05-85,47-116-49-19-83m265.1,106,.47-.23.53.23-.05-.48-.48.25L787.15,894.2m24-141,7.05,64m139-29,1,21"/>
          </g>
        </g>
        <g id="bn3_base" class="base" data-name="bn3 base">
          <path class="cls-2 start-animation" d="M675.1,1048.25l495.15-297,318,106q1,0-501.1,332.1-78.25-35-156.4-70.15Q674.5,1048.9,675.1,1048.25Z"/>
        </g>
        <g id="bn3_house" class="house" data-name="bn3 house">
          <g>
            <path class="cls-3" d="M966.2,823.05V813.2l-15-7-20,12,2,23,17,8,16-10V823.05m510.1,40.15,11-6-317-106-86,52-49-17-69,36.85V839.2l-16,10-17-8L858.6,880l.1.45L975.05,927.2l69.15-41,36,15,108-63-105-35,105,35,2,72-98.45,61.65,51.45,20.4,110-71-63-20,63,20,1,59-107,75-1-.35v0l-17-5.65.15-7-70.2-28.6v-2.1l-73,48.7-.15-1.55L879.1,1008.3,866,932.9,675.1,1047.25l313.1,142,288-190,27-26-1-52,19-13,14,5,1,39,136-95,4,6m-501.1,64-.15,0L858.7,880.4l7.35,52.45,13.1,75.4,106.9,50.45L975.2,927.2m-.15-.05.15.05,10.85,131.5,1.15.55-1.15-.55.15,1.55,73-48.7v-38.3l-10-4-5-83-69.15,41M858.7,880.4l-.1-.45-.45.25.55.2m232.4,91.2-5.9-2.35q0-1-5-68l-36-15,5,83,10,4,71,30-.85,39-.15,7,17,5.65-3-62.65-51.45-20.4-.6.4-.1-.65m-31.9,39.95v2.1l70.2,28.6.85-39-71-30v38.3m131-101.35-2-72-108,63q5,67,5,68l5.9,2.35.7.25,98.45-61.65m64,70-1-59-110,71,3,62.65,1,.35Z"/>
            <path class="cls-2" d="M866.05,932.85,675.1,1047.25l313.1,142,288-190,27-26-1-52,19-13,14,5,1,39,136-95,4,6,11-6-317-106-86,52-49-17-69,36.88V839.2l-16,10-17-8L858.62,880l.08.47L975.05,927.2l69.15-41,36,15,108-63-105-35m107,98,63,20,1,59-107,75-1-.35v.35m42-217,2,72-98.45,61.68,51.45,20.37,110-71m-278.2,6,.15,0L986,1058.82l1.12.53m103.9-87.65.7.28-.6.37-.1-.65-5.9-2.35q0-1-5-68M986,1058.87l.12,1.53,73-48.67V973.25l-10-4-5-83m102,168.7-17-5.65.15-7-70.2-28.6v-2.07m70.2,30.67.85-39-71-30m84,19,3,62.65m-180-231.82V813.2l-15-7-20,12,2,23M858.62,880l-.47.25.55.22,7.35,52.43,13.1,75.4,106.93,50.47"/>
          </g>
        </g>
        <g id="bn4_base" class="base" data-name="bn4 base">
          <path class="cls-2 start-animation" d="M1486.35,858.2l392.1,122-446.1,418.1-446.15-206Q1488.36,858.21,1486.35,858.2Z"/>
        </g>
        <g id="bn4_house" class="house" data-name="bn4 house">
          <g>
            <path class="cls-3" d="M1636.4,1074.2l10-9-111.05-39,2.9-53.15-61.9,48.15,1-33.15-29,23.15-2,33,2-33-29-13,29,13,29-23.15V986.8l-29-11.6-30,23,28,47-65.4,48.5.35.5-.35-.5-.65.5-2,129.15,60-53.1,111,49,4.9-71-57.5-23q-34-13.56-48.25-19.15-9.89-3.86-10.15-3.85-1,69,0,68l-60,53.1v.9l-.7-.3-.3.3.3-.3-144.3-58.7-2-129,45.75-39.5-1.75,1.5-287.1,191,445.15,206,441.1-418.1-386.1-119-11.1,6.7,62.1,107.35-1.1.85-2.9,53.15,111.05,39-5,72-92.05,82-111-49q-1,1,0-68,.27,0,10.15,3.85l85.85-67.9,102.05,36M1477.25,864.85l-3.9-6.7-137,95.05v1l-30,20L1381,1093.7l65.4-48.5-28-47,30-23,29,11.6v0l1,.4-1,.85-1,33.15,61.9-48.15.1-1.85-.1,1.85,1.1-.85-62.1-107.35m169.1,200.35-10,9-82.05,74h-.1l-4.9,71,92.05-82,5-72m-92.15,83,.1-1-.1,1h.1l82.05-74-102.05-36-85.85,67.9q14.2,5.6,48.25,19.15l57.5,23m-218-235-13-6-21,14,1,53L1277,996.75l-45.75,39.5,2,129,144.3,58.7.7-.6,2-129.15.65-.5-74.6-119.5,30-20v-41Z"/>
            <path class="cls-2" d="M1549.35,1219.25l92.05-82,5-72-10,9-82.05,74h-.07l-4.93,71-111-49q-1,1,0-68,.27,0,10.15,3.87l85.85-67.92,102.05,36m-648.2,115,287.1-191,1.77-1.48,26.23-22.52-1-53,21-14,13,6v40l137-95.05,3.9,6.7,11.1-6.7L1874.4,977.2l-441.1,418.1Zm348.1-236v1l-30,20,74.7,119.5,65.38-48.5-28-47,30-23,29,11.6v-.6m0,1.85V986.8l1,.4-1,.85-1,33.15,61.9-48.15.1-1.85m-61.1-106.35,62.1,107.35-1.1.85-2.9,53.15,111,39m-200-21,2-33-29-13M1381,1093.7l.33.5m-3,129.15,2-129.15.67-.5m67.53,12.42q14.21,5.58,48.25,19.13l57.53,23,.07-1m-77-159.2-29,23.15M1377.62,1224l-.32.28m1,0v-.9l-.7.62Zm60-54-60,53.1M1277.07,996.72l-45.77,39.48,2,129,144.32,58.8"/>
          </g>
        </g>
        <g id="bn5_base" class="base" data-name="bn5 base">
          <path class="cls-2 start-animation" d="M1431.3,1395.3l443.1-418.1,454.1,138-314,465.1-173,1q-102.49-46.24-205-92.65Q1431.3,1396,1431.3,1395.3Z"/>
        </g>
        <g id="bn5_house" class="house" data-name="bn5 house">
          <g>
            <path class="cls-3" d="M1635.5,1489.1q101.89,46.25,203.9,92.25l173,1,316-468.1-454.1-137-442.1,418.1q-.6,1.25,203.2,93.8m137.9-335.85-18.3,19.1-48.75,50.9,48.75-50.9,13.3-78.1,24,11,16-16-27-12-13,16,13-16,27,12-9,44.6,57-65.6,107-58,75,129-1-.2,46,17.2-21.55,26.8,15.55,24.2-88,109-10,5-38-64-53,61-10,2-22,105,56-70,19-86-19,86,142,62,75-104,23.05-72-77.05,103-21,72,21-72-82-31,82,31,77.05-103-79.05-28,79.05,28-23.05,72-75,104-142-62-56,70q-41.74-17.74-83.4-35.5-83.25-35.5-82.65-35.5l-1-10,6-4,4.75-34.85-10.75,8.85-12-5-1-6,8-4,9-69,110-55,160-165-107,58-57,65.6-15,17.4-11,2m-18.3,19.1,18.3-19.1,11-2,15-17.4,9-44.6-16,16-9,44,9-44-24-11-13.3,78.1m306.8,10.7,21.55-26.8-46-17.2-14-2.8-79,89,3,13,54,20,51.9-64.65,8.55-10.6M1878.4,1320.3l-80-128-89.05,45-9.25,68.15-4.75,34.85-6,4,1,10q-.6,0,82.65,35.5,41.65,17.75,83.4,35.5l22-105m0,0,10-2,53-61,38,64,10-5,88-109-15.55-24.2-8.55,10.6,1.1,9.6-70,86-28-47,28,47,7-34-7,34,70-86-1.1-9.6-51.9,64.65-54-20-3-13,79-89,14,2.8,1,.2-75-129-160,165-110.05,55-9,69-8,4,1,6,12,5,10.75-8.85,9.25-68.15,89.05-45Z"/>
            <path class="cls-2" d="M2073.45,1213.25l79.05,28-23.05,72-75,104-142-62-56,70q-41.75-17.74-83.4-35.5-83.25-35.51-82.65-35.5l-1-10,6-4,4.75-34.85-10.75,8.85-12-5-1-6,8-4,9-69,110-55,160-165-107,58-56.93,65.63-15.07,17.37-11,2-18.3,19.1-48.75,50.9m48.75-50.9,13.3-78.1,24,11,16-16-27-12-13,16m40-4-8.93,44.63m-7.07-28.63-9,44m180-139,75,129-1-.2,46,17.2-21.55,26.8,15.55,24.2-88,109-10,5-38-64-53,61-10,2-22,105m56-70,19-86m-231.35,36.15,9.25-68.15,89-45,80,128m-446.1,75,442.1-418.1,454.1,137-316,468.1-173-1q-102-46-203.9-92.25-203.85-92.45-203.25-93.7ZM2037.45,1139l-14-2.8-79,89,3,13,54,20,51.9-64.65,8.55-10.6m-8.55,10.6,1.1,9.6-70,86-28-47m98,174,21-72-82-31m-9-24,7-34m161-14-77,103"/>
          </g>
        </g>
        <g id="bn6_base" class="base" data-name="bn6 base">
          <path class="cls-2 start-animation" d="M1874.4,978.2l288.1-269.05,377.05,92-212.05,315.1Z"/>
        </g>
        <g id="bn6_house" class="house" data-name="bn6 house">
          <g>
            <path class="cls-3" d="M2193.45,715.85l-32.95-8.7-286,271.05,453.1,137q0-.6,106.55-157.4,53.25-78.4,106.5-156.7l-145.6-35-13.45,41,69.5,17.5-19.5,55.55-46.35,68.4-.15.6-.2,0L2262,911.35l-.45-.15,0-.15-129-37.9,15-47-5-3,21-76,29.95-31.3M2226,691.6l-20.5-6-9,10v17l4.5.5,1,8,14,3.5,9-7.5,1-22-1,22-9,7.5-14-3.5-1-8-4.5-.5-3.05,3.2-29.95,31.3L2358,796l.1-.35-.1.35.6.15,44-53-28.85-8.55-.15.55.15-.55-15.15-4.45,24-27-132-33-24,24-.5-2.55M2405.5,884.45l.1-.25-.1.25.6.2,45-60-69.5-17.5-45,57.5L2358,796l-194.5-48.85-21,76,5,3-15,47,129.05,37.9,19.45-60.9,4-4-4,4,124.45,34.3M2395,766.15l7.55-23-44,53-.6-.15-21.4,68.65,45-57.5,13.45-41m-10.15,183,.35-.55,20.25-64.15L2281,850.15l-19.45,60.9.4.3,122.9,37.8m.2.05.15-.6-.35.55.2.05m46.5-69,19.5-55.55-45,60-.6-.2L2385.2,948.6l46.35-68.4M2373.7,734.6l8.85-31.45-24,27Z"/>
            <path class="cls-2" d="M2382.55,703.15l-132.05-33-24,24-.5-2.55-20.5-6-9,10v17l4.5.5,1,8,14,3.5,9-7.5,1-22m-29.5,17.55-3.05,3.2-29.95,31.3L2358,796l.1-.35m24.5-92.5-8.85,31.47,28.85,8.53-7.55,23,145.6,35q-53.25,78.3-106.5,156.7-106.55,156.8-106.55,157.4l-453.1-137,286-271,32.95,8.7m180.1,19.3.15-.53-15.15-4.47,24-27m12.45,63-13.45,41,69.5,17.5-19.5,55.55-46.32,68.42-.18.58-.17,0L2262,911.35l-.45-.15,0-.12-129.1-37.93,15-47-5-3,21-76M2358,796l.6.15,44-53m-117.6,103-4,4,124.45,34.32.1-.27m45.5-59.55-45,60-.6-.18-20.22,64.15-.35.53m-3.33-142-45,57.5L2358,796m-96,115.35-.4-.27,19.4-60.93"/>
          </g>
        </g>
        <g id="bn7_base" class="base" data-name="bn7 base">
          <path class="cls-2 start-animation" d="M1488.35,858.2l386.1,120,284-270-326-80.05q-86,57-172,114.3Q1488.36,856.95,1488.35,858.2Z"/>
        </g>
        <g id="bn7_house" class="house" data-name="bn7 house">
          <g>
            <path class="cls-3" d="M2008.5,642.1l-4.35-1.75-29.25,21.4-1.45,9.35,35-29m-4.35-1.75-.65-.25.65.25.35-.25-52-101-101,75,52,104,36-26-31-61,23-16,48,11-48-11-23,16,49,15-9.7,47.9.7.15-.85.55-11.15,55.45-34,30,57-48,29,7,14-71,6-26-35,29,1.45-9.35-.45.35.45-.35,5.55-35.65-23,18,23-18-5.55,35.65,29.25-21.4M1766.4,679.1l6,5,79-70-23,17-62,48m222.1,60,29,6-13,62-70.8,63.75.75.25-.75-.25-.25.25v-.3l-71-20.7,5-23-120-37,19-111,62-48-340.1,226,385.1,121,288-271-159-39-14,71m-40.9-44.45.15-.7-8.3-1.85-36,26-52-104-79,70-6-5-19,111,120,37-5,23,71,20.7,11-60.7-69-19-8,35,8-35,19-14,8,3,9-61,36.15-24.45m-14.1,176.15h.2l70.8-63.75,13-62-73,65-11,60.7m-31-90.7,34-30,11.15-55.45-36.15,24.45-9,61m45.3-86.15,9.7-47.9-49-15,31,61,8.3,1.85M1988.5,739l-29-7-57,48-8-3-19,14,69,19,73-65Z"/>
            <path class="cls-2" d="M1957.45,644.1l23-18-5.55,35.68,29.25-21.43-.65-.25m5,2-4.35-1.75.35-.25-52-101-101,75,52,104,36-26-31-61,23-16,48,11m29,16-35,29,1.45-9.32-.45.32m28,6,6-26m-60,52-.67-.15-.16.7Zm69,51-29-6-29-7-57,48-8-3-19,14,69,19,73-65-13,62-70.8,63.77.75.23m-26-240,49,15-9.67,47.9-8.33-1.85m63-24-14,71m-160-108-340.1,226,385.1,121.05,288-271.05-159-39m-151-54-79,70-6-5-19,111,120,37-5,23,71,20.73,11-60.73m-116-179,23-17m96.17,80.6-11.17,55.45-34,30,9-61Zm-119.17-63.6-62,48m167.1,191.78h.2l-.25.23Zm-58-79.73-8,35"/>
          </g>
        </g>
        <g id="bn8_base" class="base" data-name="bn8 base">
          <path class="cls-2 start-animation" d="M1171.3,751.15l316,107.05,344.1-231.05-319.1-81Q1427.06,596.9,1341.8,648,1171.3,749.91,1171.3,751.15Z"/>
        </g>
        <g id="bn8_house" class="house" data-name="bn8 house">
          <g>
            <path class="cls-3" d="M1619.7,618.25,1566.35,650l73.05,20.2,63-41-65.55-16.9L1620.1,608l-.4,10.25,70,18.5-70-18.5m-16.3-41.15v1l-44.05,23-3,46,10,2.8,53.35-31.7.4-10.25,16.75,4.25,18.55-8.15,1.4-20.8,2.6-38.2-35,21v-26l-20,10-1,27m-95.55-57.55h0l-11.55,11.6-43,43-3,9-280,168q-.6,0,157.65,53,79.15,26.51,158.4,53l347.1-230L1656.8,583.3l-1.4,20.8-18.55,8.15,65.55,16.9-3,58-66,41-186.05-49,4-96-4,96,186.05,49,6-58L1566.35,650l-10-2.8,3-46-48-85-3.5,3.45m194.55,109.6-63,41-6,58,66-41,3-58m-118.4-84,20.45,4.9,20-10-22-5L1584,545.2m0,0-1.55.9,21,31,1-27L1584,545.2m-64-33.45-8.55,4.35,48,85,44-23v-1l-21-31,1.55-.9-.55-.1.55.1,18.45-10.1,22,5v26l35-21-43-82L1520,511.75m-11.55-6.15,11-8.5H1506l-9,7,11.45,1.45m-.5,13.95.5-13.95L1497,504.1l-.55.45V531.1L1508,519.5m.5-13.95-.5,13.95,3.5-3.45,8.55-4.35-.55-14.65Z"/>
            <path class="cls-2" d="M1451.35,583.1l-4,96,186.05,49,6-58L1566.35,650l-10-2.8,3-46-48-85-3.47,3.48v.52m11.5-23-11,8.5-.47,14-11.58,11.57-43,43-3,9-280,168q-.6,0,157.65,53.05,79.15,26.5,158.4,53l347.1-230.05-176.68-44-1.4,20.8-18.55,8.15,65.55,16.9-3,58-66,41m-136.5-224,8.95-7.07h13.5l.58,14.67,96.47-48.67,43,82-2.6,38.2m-145.45-67.2,8.58-4.33m-23-7.6-.55-.07m0,27V504.53l.55-.43,11.45,1.43m95.08,71.5,1-27L1584,545.22l-1.57.88,21,31v1l-44,23M1584,545.22l-.57-.12m21,5,20-10-22-5L1584,545.22M1566.35,650l53.35-31.7.4-10.22,16.75,4.22m22.55-67.15-35,21v-26m15,130,63-41m-82.7-10.9,70,18.5"/>
          </g>
        </g>
        <g id="bn9_base" class="base" data-name="bn9 base">
          <path class="cls-2 start-animation" d="M905.1,661.9l267.1,88.2,336.25-201.9-210-53.15Z"/>
        </g>
        <g id="bn9_house" class="house" data-name="bn9 house">
          <g>
            <path class="cls-3" d="M1154.35,513l105,27.1,121.1-55-105-25.1-121,53m225.75,1.7-.15-.55.45,35-32.5,14,31.15,8.45h.15l-.3.45-.55,43.15-88,50-51-16.1.5-8.45-56.55-16.55,1-38-30-8.55V556.4L906.1,661.85l263.1,89.2L1451.45,583.2v-8l33-34.05-104.35-26.5M1333.15,560l14.75,3.15,32.5-14-.45-35,.15.55.35-29.55-121.1,55,.7,58-.7-58-105-27.1v64.55l30,8.55-1,38,56.55,16.55v0l1.25.4.5-38.5,10.5-6,8.5,2,72.6-38.55M1348,563.1l-14.85-3.1-72.6,38.55-8.5-2-10.5,6,50,16,87.3-46.5-.5-.1v-.25h.55l.1-.05-31.15-8.45m30.45,52,.55-43.15-87.3,46.5-50-16-.5,38.5-1.25-.35-.5,8.45,51,16.1Z"/>
            <path class="cls-2" d="M1379.07,571.55l-31.17-8.45-14.75-3.1-72.6,38.55-8.5-2-10.5,6,50,16,87.3-46.5-.5-.1v-.25h.57l.1-.05h.13l-.3.42-.55,43.15-88,50-51-16.1.5-8.45-56.55-16.55,1-38-30-8.55v-21.1L906.1,661.85l263.1,89.2L1451.45,583.2v-8l33-34.05-104.33-26.5-.17-.55.45,35-32.5,14m31.3,8.48H1379l-.57.3ZM1154.32,556.4V513l121-53,105,25.1L1380,514.6m-120,83.4-.7-58-105-27.1m85.45,127.7v-.05l1.25.42.5-38.52m-.5,38.52-1.25-.37m140.65-155.5-121.1,54.95"/>
          </g>
        </g>
        <g id="bn10_base" class="base" data-name="bn10 base">
          <path class="cls-2" start-animation d="M585,560.7,933.3,406.8l363.15,87.25L906.1,663Z"/>
        </g>
        <g id="bn10_house" class="house" data-name="bn10 house">
          <g>
            <path class="cls-3" d="M947.25,409.8,925.6,442.7l2.95,55.05h9.55l-2.5-49.05,25-39.5-25,39.5,2.5,49.05,1.95,38,61.15,16.55.85-43.5,6.5-3-6.5,3,68,16.55,76-29-19.5-6.65h0l-19-6.4,19,6.4h0l-.45-37.4-.3-24.7-26.5,11.3,8.85,2.4,1,5.5-76.55,29.5,1,22.5-1-22.5-17.95-6,18.9,29.5q65.6-25.95,66.1-26.45V450.8l16,28.05-83.1,34.45-75.5-120.15-9.8,16.65m0,0-13-4L585,560.7q0-.11,99.2,31.7,49.6,15.9,99.25,31.85l12.5-5.5,8.5,11.5L906,662.3l248.1-105.4-.5-44,77.6-33.9-105-26.6.45,37.4,19.5,6.65V545l-75.55,35-69.5-20.55.15-7L940.1,535.85l-2-38H928.6l-3-55.15,21.65-32.9M1146.1,544.9V496.4l-76,29,.45,54-.45-54-68-16.55-.85,43.5-.15,7,69.5,20.55,75.55-35M957.3,392.8l-.25.35,75.5,120.15,83.1-34.45-16-28.05v22.55q-.5.5-66.1,26.45l-18.9-29.5-4.55-1.5-2.5-7.05,72.05-27.95,19.65,5.1,26.55-11.25,13.55-5.75-47.05-73-135,44m150.85,48.5-8.85-2.4-19.65-5.1-72.05,27.95,2.5,7.05,4.55,1.5,18,6,76.55-29.5Z"/>
            <path class="cls-2" d="M585,560.7,934.3,405.8l13,4,9.83-16.65.22-.35,135-43.95,47.05,73-13.55,5.75.3,24.7,105,26.6-77.6,34,.5,44L906,662.3l-101.55-32L796,618.8l-12.5,5.5L684.2,592.45Q584.9,560.61,585,560.7ZM947.3,409.8l-21.7,32.9,2.95,55.05h9.55l-2.5-49.05,25-39.5m-22.5,88.55,1.95,38,61.15,16.55.85-43.5,6.5-3m-7.35,46.5-.15,7,69.5,20.55,75.55-35V496.4l-76,29,.45,54m55.3-151.7-26.55,11.2,8.85,2.4,1,5.5-76.55,29.5,1,22.5m92.6-46.45.45,37.42,19.5,6.63m-19.5-6.63h0l-19-6.42m-75-7.05-18-6,18.9,29.5q65.6-25.95,66.1-26.45V450.8l16,28.05-83.1,34.45L957.08,393.15m57.57,77.15-4.55-1.5-2.5-7.05,72.05-27.95,19.65,5.1m-29.2,86.45-68-16.55"/>
          </g>
        </g>
      </svg>
    </div>

    <script>
      /*
      // Listen to the scroll event (in case if the house will not be placed on the top of the screen);
      let scrollpos = window.scrollY; // window scroll position
      let wh = window.innerHeight; // as soon as element touches bottom with offset event starts
      let element = document.querySelector(".svgWrapper"); //element with houses

      window.addEventListener('scroll', function(){
          if(scrollpos < (wh - element.offsetTop)){
              // element.classList.add("base");
              console.log("Scrol position less");
          }
      });
      */

      // Kill base lines after animation:
      let myFunction = () => {
        // Array of elements with .base class
        let elements = document.getElementsByClassName("base");
        for (let i = 0; i < elements.length; i ++) {
          elements[i].style.display = 'none';
        }
      }
      setTimeout(myFunction, 2820);

    </script>
</body>
</html>



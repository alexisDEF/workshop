<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Escape Game!</title>
  <link href="https://fonts.googleapis.com/css?family=Bangers|Cutive+Mono&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css'><link rel="stylesheet" href="{{asset('app.css')}}">

</head>
<body>

<div id="escaped">
    <h2 id="tempsJeu"></h2>
    <br>
    <h1>Bravo !</h1>
    <br>
    <button onclick="getOut()">Fin du jeu</button>
</div>
<div id="timer">00:00</div>
<div id="puzzlerModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-puzzler">&times;</span>

    <!-- puzzler container   -->
    <div id="puzzler-container">

      <div class="content">
        <div>
          <p id="alert"></p>
        </div>
      </div>
        <p class="quote">Quelle sont les conséquences du harcèlement au travail ?</p><br><br>
      <p class="quote">Règles: Résoud l'énigme des tuiles : les images sont dans le désordre <br>Pouvez vous trouver le bon ordre ?<br>Faites glisser et déposer les tuiles dans les cases vides dans le bon ordre.<br>
      <span class="bighint">Découvrez un indice</span><span class="revealtext"><b> "La véritable connaissance se trouve parfois entre les pages." </b> </span> </p>

      <div id="btn-container"><button>Soumettre la réponse</button>
      </div>
      <div class="outerflex">
        <div class="topContainer">
          <div class="outerBorder">
            <div class="tile" id="1"><img src="{{asset("/img/3.png")}}" alt="" /></div>
          </div>
          <div class="outerBorder">
            <div class="tile" id="2"><img src="{{asset("/img/4.png")}}" alt="" /></div>
          </div>
          <div class="outerBorder">
            <div class="tile" id="3"><img src="{{asset("/img/7.png")}}" alt="" /></div>
          </div>
          <div class="outerBorder">
            <div class="tile" id="4"><img src="{{asset("/img/6.png")}}" alt="" /></div>
          </div>
          <div class="outerBorder">
            <div class="tile" id="5"><img src="{{asset("/img/8.png")}}" alt="" /></div>
          </div>
          <div class="outerBorder">
            <div class="tile" id="6"><img src="{{asset("/img/1.png")}}" alt="" /></div>
          </div>
          <div class="outerBorder">
            <div class="tile" id="7"><img src="{{asset("/img/5.png")}}" alt="" /></div>
          </div>
          <div class="outerBorder">
            <div class="tile" id="8"><img src="{{asset("/img/2.png")}}" alt="" /></div>
          </div>
        </div>
        <!-- top container -->

        <div class="bottomContainer">
          <div class="blank" id="b1"> </div>
          <div class="blank" id="b2"> </div>
          <div class="blank" id="b3"> </div>
          <div class="blank" id="b4"> </div>
          <div class="blank" id="b5"> </div>
          <div class="blank" id="b6"> </div>
          <div class="blank" id="b7"> </div>
          <div class="blank" id="b8"> </div>

        </div>
        <!-- bottom container -->
      </div>
      <!-- outer container -->

    </div>
    <!--  end puzzler container    -->

  </div>
  <!-- end modal content   -->

</div>
<!-- end modal -->



<!-- Math Puzzle  -->

<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="mathPuzzleModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-mathpuzzle">&times;</span>

    <!--   Math Puzzle Container   -->
    <!--  PUZZLE GOES INSIDE HERE   -->
    <div id="math-puzzle-container">
      <div id="math-puzzle-main">
        <div id="math-puzzle-keypad">
          <button type="button" class="math-puzzle-numberButton" id="math-puzzle-one">1</button>
          <button type="button" class="math-puzzle-numberButton" id="math-puzzle-two">2</button>
          <button type="button" class="math-puzzle-numberButton" id="math-puzzle-three">3</button>
          <button type="button" class="math-puzzle-numberButton" id="math-puzzle-four">4</button>
          <button type="button" class="math-puzzle-numberButton" id="math-puzzle-five">5</button>
          <button type="button" class="math-puzzle-numberButton" id="math-puzzle-six">6</button>
          <button type="button" class="math-puzzle-numberButton" id="math-puzzle-seven">7</button>
          <button type="button" class="math-puzzle-numberButton" id="math-puzzle-eight">8</button>
          <button type="button" class="math-puzzle-numberButton" id="math-puzzle-nine">9</button>
          <button type="button" class="math-puzzle-zeroButton" id="math-puzzle-zero">0</button>
          <button type="button" class="math-puzzle-signButton" id="math-puzzle-plus">+</button>
          <button type="button" class="math-puzzle-signButton" id="math-puzzle-minus">-</button>
        </div>
        <div id="math-puzzle-sum">
          <div class="math-puzzle-position" id="math-puzzle-message">
            Make the sum add up!
          </div>
          <div class="math-puzzle-position" id="math-puzzle-a">Number</div>
          <div class="math-puzzle-position" id="math-puzzle-b">Sign</div>
          <div class="math-puzzle-position" id="math-puzzle-c">Number</div>
          <div class="math-puzzle-position" id="math-puzzle-d">Sign</div>
          <div class="math-puzzle-position" id="math-puzzle-e">Number</div>
          <div class="math-puzzle-position" id="math-puzzle-f">=</div>
          <div class="math-puzzle-position" id="math-puzzle-g">Number</div>
        </div>
      </div>

    </div>
    <!--  end math puzzle container    -->

  </div>
  <!-- end modal content   -->

</div>
<!-- end modal  -->

<!-- End Puzzle -->

<!-- Flexbox Puzzle  -->

<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="flexboxPuzzleModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-flexboxpuzzle">&times;</span>

    <!--   Flexbox Puzzle Container   -->
    <!--  PUZZLE GOES INSIDE HERE   -->
    <div id="flexbox-puzzle-container">

      <div>
        <header class="heading">
          <p class="heading__rules">
            Use the buttons to rearrange the boxes and find the correct alignment!<br> The box color will change and indicate if you're getting hot or cold.
            <br><br>
          </p>
          <p class="heading__subtitle"></p>
          <div><span class="notification">Start with turning on "Display Flex"</span></div>
        </header>
        <div class="flex-menu">
          <div>
            <label for="flexDisplay">Display</label>
            <button class="flex-menu__items" id="flexDisplay">Display Flex  </button>
          </div>
          <div>
            <label for="flexDirectn">Flex Direction</label>
            <button class="flex-menu__items" id="flexDirectn">Change Flex Direction</button>
          </div>
          <div>
            <label for="flexJustCont">Justify-Content</label>
            <button class="flex-menu__items" id="flexJustCont">Justify Content</button>
          </div>
          <div>
            <label for="flexAlignItems">Align-Items</label>
            <button class="flex-menu__items" id="flexAlignItems">Align Items</button>
          </div>
        </div>

        <div class="flexPuzzle-container">
          <div class="cubes cube-1">
            <div class="side top"></div>
            <div class="side bottom"></div>
            <div class="side front"></div>
            <div class="side back"></div>
            <div class="side left"></div>
            <div class="side right"></div>
          </div>
          <div class="cubes cube-2">
            <div class="side top"></div>
            <div class="side bottom"></div>
            <div class="side front"></div>
            <div class="side back"></div>
            <div class="side left"></div>
            <div class="side right"></div>
          </div>
          <div class="cubes cube-3">
            <div class="side top"></div>
            <div class="side bottom"></div>
            <div class="side front"></div>
            <div class="side back"></div>
            <div class="side left"></div>
            <div class="side right"></div>

          </div>
          <div class="cubes cube-4">
            <div class="side top"></div>
            <div class="side bottom"></div>
            <div class="side front"></div>
            <div class="side back"></div>
            <div class="side left"></div>
            <div class="side right"></div>
          </div>
          <div class="cubes cube-5">
            <div class="side top"></div>
            <div class="side bottom"></div>
            <div class="side front"></div>
            <div class="side back"></div>
            <div class="side left"></div>
            <div class="side right"></div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--  end flexbox puzzle container    -->

</div>
<!-- end modal content   -->

</div>
<!-- end Modal -->

<!-- Flexbox Puzzle -->


<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="mirrorPuzzleModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-mirrorpuzzle">&times;</span>

    <!--   Mirror Puzzle Container   -->
    <!--  PUZZLE GOES INSIDE HERE   -->
    <div id="mirror-puzzle-container">
      <p id="mirror-clue">Qu'est-ce que le harcèlement sexuel au travail ?</p>
      <div id="note">
        <p id="note-text" class="mirror-text">"Le harcèlement sexuel se manifeste par des actions ou des paroles à caractère sexuel
          ou sexiste répétées, qui dégradent ou humilient une personne ou créent un environnement intimidant ou/et offensant pour elle."</p>
      </div>
      <div id="mmirror"></div>

    </div>
    <!--  end mirror puzzle container    -->

  </div>
  <!-- end modal content   -->

</div>
<!-- end modal -->

<!-- End Mirror Puzzle -->

<!-- Pipe Puzzle  -->

<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="pipePuzzleModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-pipepuzzle">&times;</span>

    <!--  Pipe Puzzle Container   -->
    <!--  PUZZLE GOES INSIDE HERE   -->
    <div id="pipe-puzzle-container">
      <div id="pipe-notbusted">
        <div class="container" id="container">
        </div>

        <div class="testArea">
          <button class="testButton" id="test" onClick="newPipe()">
        Add Pipe
        </button>
          <button class="testButton" id="test2" onClick="updatePipes()">
        Update Rows & Columns
        </button>
          <button class="testButton" id="test3" onClick="test()">
        List Array
        </button>
          <br /> <br />
          <form>
            Rows: <input type="number" min="1" max="10" id="rowCount"> Columns: <input type="number" min="1" max="10" id="colCount">
          </form>
          <br />
          <div class="pipe pipe-straight"></div>
          <div class="pipe pipe-cross"></div>
          <div class="pipe pipe-angle"></div>
          <div class="pipe pipe-junction"></div>

        </div>

        <div class="bottomConsole"></div>
      </div>
      <div id="pipe-busted">
        <h2>Oh my...Looks like these pipes are busted. <br> I guess I better leave this for the plumber.</h2>
        <!-- <img src="https://media.giphy.com/media/46LMaiLUFRkoU/giphy.gif" alt=""> -->
      </div>

    </div>
    <!--   end container   -->

  </div>
  <!--  end modal content  -->

</div>
<!-- end modal -->

<!-- End Pipe Puzzle -->

<!-- Recursion Puzzle  -->

<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="recursionPuzzleModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-recursionpuzzle">&times;</span>

    <!--  Recursion Puzzle Container   -->
    <!--  PUZZLE GOES INSIDE HERE   -->
    <div id="recursion-puzzle-container">

      <div id="app">
        <h1>We All Scream For Ice Cream</h1>
        <div v-if="won" class="won">
          <h1><i class="fa fa-ice-cream"></i></h1>
        </div>
        <thing v-else :data="root" :cb="cb"></thing>
      </div>

    </div>
    <!--   end container   -->

  </div>
  <!--  end modal content  -->

</div>
<!-- end modal -->

<!-- End  Recursion Puzzle  -->

<!-- ROOM SCENE -->
<!-- Generator: Adobe Illustrator 23.0.3, SVG Export Plug-In  -->
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="105px" viewBox="0 0 300 105" style="enable-background:new 0 0 300 105;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#e6e6e6;}
	.st1{fill:#e6e6e6;stroke:#000000;stroke-width:0.2578;stroke-miterlimit:10;}
	.st2{fill:#e6e6e6;fill-opacity:0;}
	.st3{opacity:0;}
</style>
<defs>
</defs>
<g id="id="mirrorNoteWrap>
	<g id="mirror">
		<ellipse id="solidfill" class="st0" cx="285" cy="27.6" rx="11.5" ry="14.7"/>
		<g>
			<path class="st0" d="M285,7.9c-8.2,0-14.9,8.8-14.9,19.7s6.7,19.7,14.9,19.7s14.9-8.8,14.9-19.7S293.2,7.9,285,7.9z M285,46.3
				c-7.7,0-13.9-8.4-13.9-18.7S277.4,9,285,9s13.9,8.4,13.9,18.7S292.7,46.3,285,46.3z"/>
			<path class="st0" d="M285,12.3c-6.4,0-11.6,6.9-11.6,15.3S278.6,43,285,43s11.6-6.9,11.6-15.3S291.4,12.3,285,12.3z M285,41.9
				c-5.8,0-10.5-6.4-10.5-14.3s4.7-14.3,10.5-14.3s10.5,6.4,10.5,14.3S290.8,41.9,285,41.9z"/>
			<rect x="278.4" y="19.3" transform="matrix(0.7032 -0.711 0.711 0.7032 70.135 207.5076)" width="10.4" height="0.9"/>
			<rect x="279.1" y="26.5" transform="matrix(0.7032 -0.711 0.711 0.7032 64.812 209.1774)" width="7.7" height="0.9"/>
		</g>
		<g id="note">
			<path d="M292,37.8c0-0.1,0.5-1.6,0.5-3.6V30h-7.3v4.2c0,1.9-0.4,3.4-0.4,3.4l-0.1,0.3h7.3V37.8z M285.2,37.5
				c0.1-0.6,0.4-1.8,0.4-3.2v-3.7h6.3v3.7c0,1.5-0.3,2.8-0.4,3.2C291.6,37.5,285.2,37.5,285.2,37.5z"/>

				<rect x="287.9" y="29.6" transform="matrix(9.839854e-02 -0.9951 0.9951 9.839854e-02 230.2782 314.6575)" class="st1 st0" width="1.7" height="1.2"/>
			<g>
				<g>
					<path d="M288.8,32.7h-2.4c0,0-0.1,0-0.1-0.1c0,0,0-0.1,0.1-0.1h2.4C288.9,32.6,288.9,32.6,288.8,32.7
						C288.9,32.6,288.9,32.7,288.8,32.7z"/>
				</g>
			</g>
			<g>
				<g>
					<path d="M291.4,33.5c-0.8,0-1.7,0-2.5,0s-1.7,0-2.5,0c0,0-0.1,0-0.1-0.1c0,0,0-0.1,0.1-0.1c0.8,0,1.7,0,2.5,0s1.7,0,2.5,0
						C291.4,33.4,291.4,33.5,291.4,33.5L291.4,33.5z"/>
				</g>
			</g>
			<g>
				<g>
					<path d="M291.2,34.3h-4.9c0,0-0.1,0-0.1-0.1c0,0,0-0.1,0.1-0.1h4.9C291.2,34.2,291.2,34.3,291.2,34.3L291.2,34.3z"/>
				</g>
			</g>
			<g>
				<g>
					<path d="M286.5,35.1C286.4,35.1,286.4,35.1,286.5,35.1C286.4,35,286.5,35,286.5,35.1c0.8-0.1,1.6-0.1,2.4-0.1s1.6,0,2.4,0
						c0,0,0.1,0,0.1,0.1c0,0,0,0.1-0.1,0.1c-0.8,0-1.6,0-2.4,0C288.1,35.1,287.3,35.1,286.5,35.1z"/>
				</g>
			</g>
		</g>
	</g>
	<rect id="mirrorPuzzleBtn" x="270" y="8" class="st2" width="30" height="39.5"/>
</g>
<g id="door">
	<path class="st0" d="M62.7,56.7c1.5,0,2.8-1.3,2.8-2.8s-1.3-2.8-2.8-2.8c-1.5,0-2.8,1.3-2.8,2.8C60,55.5,61.2,56.7,62.7,56.7z
		 M62.7,52.9c0.6,0,1,0.5,1,1s-0.5,1-1,1c-0.6,0-1-0.5-1-1S62.2,52.9,62.7,52.9z"/>
	<path class="st0" d="M95.9,104v-1.7H74.7l0,0h-0.3V0H21.7v102.3h-2.3H0v1.7h19.2h4.1h2.2h1.7h41.6h1.7h2.1 M68.8,102.3H27.2V5.5
		h41.6V102.3z M70.5,102.3V3.8l0,0h-45l0,0v98.5h-2.1V1.7h49.2v100.5h-2.1V102.3z"/>
</g>

<!--   padlock section -->
<svg style="display: none;">
	<symbol id="locked" viewBox="0 0 24 24">

	</symbol>
  <symbol id="unlocked" viewBox="0 0 24 24">

  </symbol>
</svg>

<svg id="padlock0" x="75" y="25" width="7" height="7" viewBox="0 0 24 24">
   		<path class="locked" d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z"/>
      		<path class="unlocked" d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6h1.9c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm0 12H6V10h12v10z"/>
  </svg>

<svg id="padlock1" x="75" y="33" width="7" height="7" viewBox="0 0 24 24">
      		<path class="locked" d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z"/>
      		<path class="unlocked" d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6h1.9c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm0 12H6V10h12v10z"/>
  </svg>

<svg id="padlock2" x="75" y="41" width="7" height="7" viewBox="0 0 24 24">
      		<path class="locked" d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z"/>
      		<path class="unlocked" d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6h1.9c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm0 12H6V10h12v10z"/>
  </svg>

<svg id="padlock3" x="75" y="49" width="7" height="7" viewBox="0 0 24 24">
      		<path class="locked" d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z"/>
      		<path class="unlocked" d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6h1.9c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm0 12H6V10h12v10z"/>
  </svg>

<svg id="padlock4" x="75" y="57" width="7" height="7" viewBox="0 0 24 24">
      		<path class="locked" d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z"/>
      		<path class="unlocked" d="M12 17c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm6-9h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6h1.9c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm0 12H6V10h12v10z"/>
  </svg>


<!--   end of padlock section -->

<path id="desk" class="st0" d="M130.4,65.4v5.5h2v33.7h5.5V73H207v6.4v1.3v8.4v1.4v14.1h18.3V90.5v-1.4v-8.4v-1.3v-8.5v-1.3v-4.3
	L130.4,65.4L130.4,65.4z M136.7,103.4h-3V70.9h3V73V103.4z M138,71.7v-0.8h69.1v0.8H138z M224.1,103.4h-15.7V90.5h15.7V103.4z
	 M224.1,89.1h-15.7v-8.4h15.7V89.1z M224.1,79.4h-15.7v-8.5h15.7V79.4z M207.9,69.6h-0.8H138h-1.3h-4.3h-0.7v-3h92.4v3H207.9z
	 M220.3,75.2h-8.1v-0.6c0-0.8,0.7-1.5,1.5-1.5h5c0.8,0,1.5,0.7,1.5,1.5L220.3,75.2L220.3,75.2z M220.3,85.1h-8.1v-0.6
	c0-0.8,0.7-1.5,1.5-1.5h5c0.8,0,1.5,0.7,1.5,1.5L220.3,85.1L220.3,85.1z M212.2,101.8v-0.6c0-0.8,0.7-1.5,1.5-1.5h5
	c0.8,0,1.5,0.7,1.5,1.5v0.6H212.2z M220.3,95.1h-8.1v-0.6c0-0.8,0.7-1.5,1.5-1.5h5c0.8,0,1.5,0.7,1.5,1.5L220.3,95.1L220.3,95.1z" />
<g id="computer">
  <g>
    <g id="hard-drive">
      <rect x="205.4" y="60.4" class="st0" width="0.9" height="3" />
      <rect x="201.7" y="60.4" class="st0" width="0.9" height="3" />
      <polygon class="st0" points="196.3,39.1 206.4,39.1 206.4,40.1 207.3,40.1 207.3,38.2 195.4,38.2 195.4,40.1 196.3,40.1 			" />
      <path class="st0" d="M193.7,36.2v29.5H209V36.2H193.7z M208.1,64.7h-13.5V37.1h13.5V64.7L208.1,64.7z" />
      <polygon class="st0" points="206.2,53.7 204.7,53.7 204.7,54.6 207.1,54.6 207.1,52.1 206.2,52.1 			" />
      <rect x="199.9" y="60.4" class="st0" width="0.9" height="3" />
      <rect x="203.6" y="60.4" class="st0" width="0.9" height="3" />
      <rect x="204.6" y="40.9" class="st0" width="1.8" height="0.9" />
      <rect x="200.1" y="46.2" class="st0" width="6.3" height="0.9" />
      <rect x="198" y="60.4" class="st0" width="0.9" height="3" />
      <rect x="196.2" y="60.4" class="st0" width="0.9" height="3" />
    </g>
    <g id="desktop">
      <path class="st0" d="M170.2,61.3c-5,0.2-5,1-5,1.4v2.1c0,1.2,4.1,1.4,7.6,1.4s7.6-0.2,7.6-1.4v-2.1c0-0.3,0-1.1-5-1.4v-3h14.3
				V34.9h-33.8v23.4h14.3L170.2,61.3L170.2,61.3z M179.4,64.6c-0.5,0.2-2.7,0.6-6.7,0.6c-3.9,0-6.2-0.4-6.7-0.6v-1.2
				c1.4,0.5,4.2,0.6,6.7,0.6s5.2-0.1,6.7-0.6V64.6z M156.7,57.4V35.8h31.9v21.6h-14.3v4.8h0.4c2.1,0.1,3.4,0.3,4.1,0.5
				c-0.9,0.2-3,0.5-6.2,0.5s-5.2-0.3-6.2-0.5c0.7-0.2,2-0.4,4.1-0.5h0.4v-4.8C171.1,57.4,156.7,57.4,156.7,57.4z" />
      <path class="st0" d="M187,37h-28.5v18.4H187V37z M186,54.4h-26.7V37.9H186V54.4z" />
      <rect x="158.9" y="37" class="st0" width="28" height="18" />
      <g id="screenglitch">
        <rect x="175.2" y="43.1" width="3.2" height="1.1" />
        <rect x="181.6" y="43.1" width="3.2" height="1.1" />
        <rect x="162.5" y="43.1" width="9.5" height="1.1" />
        <rect x="168.9" y="40.5" width="6.3" height="1.1" />
        <rect x="178.4" y="40.5" width="3.2" height="1.1" />
        <rect x="162.5" y="37.9" width="3.2" height="1.1" />
        <rect x="168.9" y="37.9" width="3.2" height="1.1" />
        <rect x="175.2" y="37.9" width="3.2" height="1.1" />
        <rect x="181.6" y="37.9" width="3.2" height="1.1" />
        <rect x="159.4" y="45.6" width="3.2" height="1.1" />
        <rect x="165.7" y="45.6" width="6.3" height="1.1" />
        <rect x="178.4" y="45.6" width="6.3" height="1.1" />
        <rect x="170.2" y="50.8" width="3.2" height="1.1" />
        <rect x="163.8" y="50.8" width="3.2" height="1.1" />
        <rect x="176.5" y="50.8" width="9.5" height="1.1" />
        <rect x="173.3" y="48.2" width="6.3" height="1.1" />
        <rect x="160.6" y="48.2" width="3.2" height="1.1" />
        <rect x="167" y="48.2" width="3.2" height="1.1" />
        <rect x="176.5" y="53.4" width="6.3" height="1.1" />
        <rect x="163.8" y="53.4" width="6.3" height="1.1" />
      </g>
    </g>
  </g>
</g>
<g id="servers">
  <g>
    <path class="st0" d="M250.7,72.3c0.2,0,0.4,0.2,0.4,0.4v31.6c0,0.2-0.2,0.4-0.4,0.4h-22.9c-0.2,0-0.4-0.2-0.4-0.4V72.7
			c0-0.2,0.2-0.4,0.4-0.4L250.7,72.3 M250.7,71.9h-22.9c-0.4,0-0.7,0.3-0.7,0.7v31.6c0,0.4,0.3,0.7,0.7,0.7h22.9
			c0.4,0,0.7-0.3,0.7-0.7V72.7C251.5,72.3,251.1,71.9,250.7,71.9L250.7,71.9z" />
    <path class="st0" d="M239.3,87.2c-3.9,0-7.1-3.1-7.1-7s3.2-7,7.1-7c3.9,0,7.1,3.1,7.1,7S243.2,87.2,239.3,87.2z M239.3,73.5
			c-3.7,0-6.7,3-6.7,6.6c0,3.7,3,6.6,6.7,6.6s6.7-3,6.7-6.6S243,73.5,239.3,73.5z" />
    <g>
      <path class="st0" d="M238.9,102.8h-10.2c-0.1,0-0.2-0.1-0.2-0.2V89.9c0-0.1,0.1-0.2,0.2-0.2h10.2c0.1,0,0.2,0.1,0.2,0.2v12.7
				C239.1,102.7,239,102.8,238.9,102.8z M228.9,102.4h9.8V90.1h-9.8V102.4z" />
      <path class="st0" d="M237.8,91.9h-2.5c-0.1,0-0.2-0.1-0.2-0.2v-0.8c0-0.1,0.1-0.2,0.2-0.2h2.5c0.1,0,0.2,0.1,0.2,0.2v0.8
				C238,91.8,237.9,91.9,237.8,91.9z M235.5,91.5h2.1V91h-2.1V91.5z" />
      <path class="st0" d="M234.7,91.9h-2.5c-0.1,0-0.2-0.1-0.2-0.2v-0.8c0-0.1,0.1-0.2,0.2-0.2h2.5c0.1,0,0.2,0.1,0.2,0.2v0.8
				C234.9,91.8,234.8,91.9,234.7,91.9z M232.4,91.5h2.1V91h-2.1V91.5z" />
      <path class="st0" d="M237.8,93.4h-2.5c-0.1,0-0.2-0.1-0.2-0.2v-0.8c0-0.1,0.1-0.2,0.2-0.2h2.5c0.1,0,0.2,0.1,0.2,0.2v0.8
				C238,93.3,237.9,93.4,237.8,93.4z M235.5,93h2.1v-0.5h-2.1V93z" />
      <path class="st0" d="M234.7,93.4h-2.5c-0.1,0-0.2-0.1-0.2-0.2v-0.8c0-0.1,0.1-0.2,0.2-0.2h2.5c0.1,0,0.2,0.1,0.2,0.2v0.8
				C234.9,93.3,234.8,93.4,234.7,93.4z M232.4,93h2.1v-0.5h-2.1V93z" />
      <path class="st0" d="M237.8,94.9h-2.5c-0.1,0-0.2-0.1-0.2-0.2v-0.8c0-0.1,0.1-0.2,0.2-0.2h2.5c0.1,0,0.2,0.1,0.2,0.2v0.8
				C238,94.8,237.9,94.9,237.8,94.9z M235.5,94.5h2.1V94h-2.1V94.5z" />
      <path class="st0" d="M234.7,94.9h-2.5c-0.1,0-0.2-0.1-0.2-0.2v-0.8c0-0.1,0.1-0.2,0.2-0.2h2.5c0.1,0,0.2,0.1,0.2,0.2v0.8
				C234.9,94.8,234.8,94.9,234.7,94.9z M232.4,94.5h2.1V94h-2.1V94.5z" />
      <path class="st0" d="M230.5,92.1c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7s0.7,0.3,0.7,0.7S230.9,92.1,230.5,92.1z M230.5,91
				c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4S230.7,91,230.5,91z" />
      <path class="st0" d="M230.5,94c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7s0.7,0.3,0.7,0.7C231.3,93.6,230.9,94,230.5,94z
				 M230.5,92.9c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4S230.7,92.9,230.5,92.9z" />
      <path class="st0" d="M237.8,97.5h-8c-0.1,0-0.2-0.1-0.2-0.2v-1.5c0-0.1,0.1-0.2,0.2-0.2h8c0.1,0,0.2,0.1,0.2,0.2v1.5
				C238,97.4,237.9,97.5,237.8,97.5z M230,97.1h7.6V96H230V97.1z" />
      <path class="st0" d="M237,97h-1.8c-0.1,0-0.1,0-0.2-0.1c0-0.1,0-0.1,0-0.2l0.4-0.5c0,0,0.1-0.1,0.2-0.1h1c0.1,0,0.1,0,0.2,0.1
				l0.4,0.5c0,0.1,0,0.1,0,0.2S237.1,97,237,97z M235.6,96.6h1l-0.1-0.2h-0.8L235.6,96.6z" />
      <path class="st0" d="M237.8,99.7h-8c-0.1,0-0.2-0.1-0.2-0.2V98c0-0.1,0.1-0.2,0.2-0.2h8c0.1,0,0.2,0.1,0.2,0.2v1.5
				C238,99.7,237.9,99.7,237.8,99.7z M230,99.4h7.6v-1.1H230V99.4z" />
      <path class="st0" d="M237.8,102h-8c-0.1,0-0.2-0.1-0.2-0.2v-1.5c0-0.1,0.1-0.2,0.2-0.2h8c0.1,0,0.2,0.1,0.2,0.2v1.5
				C238,101.9,237.9,102,237.8,102z M230,101.6h7.6v-1.1H230V101.6z" />
      <path class="st0" d="M237,99.3h-1.8c-0.1,0-0.1,0-0.2-0.1c0-0.1,0-0.1,0-0.2l0.4-0.5c0,0,0.1-0.1,0.2-0.1h1c0.1,0,0.1,0,0.2,0.1
				l0.4,0.5c0,0.1,0,0.1,0,0.2S237.1,99.3,237,99.3z M235.6,98.9h1l-0.1-0.2h-0.8L235.6,98.9z" />
      <path class="st0" d="M234.4,99.3h-1.8c-0.1,0-0.1,0-0.2-0.1c0-0.1,0-0.1,0-0.2l0.4-0.5c0,0,0.1-0.1,0.2-0.1h1
				c0.1,0,0.1,0,0.2,0.1l0.4,0.5c0,0.1,0,0.1,0,0.2C234.6,99.2,234.5,99.3,234.4,99.3z M233,98.9h1l-0.1-0.2h-0.8L233,98.9z" />
      <path class="st0" d="M234.8,97h-1c-0.1,0-0.2-0.1-0.2-0.2v-0.5c0-0.1,0.1-0.2,0.2-0.2h1c0.1,0,0.2,0.1,0.2,0.2v0.5
				C235,96.9,234.9,97,234.8,97z M234,96.6h0.6v-0.2H234V96.6z" />
      <circle class="st0" cx="230.7" cy="96.5" r="0.2" />
      <circle class="st0" cx="231.5" cy="96.5" r="0.2" />
      <circle class="st0" cx="232.2" cy="96.5" r="0.2" />
    </g>
    <path class="st0" d="M239.3,81.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5C240.7,81,240.1,81.6,239.3,81.6z
			 M239.3,79.1c-0.6,0-1.1,0.5-1.1,1.1s0.5,1.1,1.1,1.1s1.1-0.5,1.1-1.1C240.4,79.6,239.9,79.1,239.3,79.1z" />
    <path class="st0" d="M239.8,78.9h-0.4c0-2.2,2-4,4.5-4v0.4C241.6,75.2,239.8,76.9,239.8,78.9z" />
    <path class="st0" d="M240.4,79.3H240c0-1.4,2.3-2.5,5.3-2.5v0.4C242.7,77.2,240.4,78.2,240.4,79.3z" />
    <path class="st0" d="M244.5,84.4c-0.1-2.2-1.8-4-3.8-4V80c2.2-0.1,4.1,1.9,4.2,4.3L244.5,84.4z" />
    <path class="st0" d="M242.6,86c0-1.3-0.3-2.6-0.8-3.5c-0.4-0.9-1-1.3-1.5-1.3l0,0v-0.4l0,0c0.7,0,1.4,0.5,1.9,1.5s0.8,2.3,0.8,3.7
			L242.6,86z" />
    <path class="st0" d="M236.6,86.6l-0.1-0.3c1-0.3,1.9-1,2.4-1.9s0.6-1.9,0.3-2.8l0.4-0.1c0.3,1,0.2,2.1-0.4,3.1
			C238.7,85.5,237.8,86.2,236.6,86.6z" />
    <path class="st0" d="M234.6,85.2l-0.1-0.3c2.6-0.8,4.4-2.5,4-3.6l0.4-0.1C239.3,82.5,237.4,84.3,234.6,85.2z" />
    <path class="st0" d="M235.6,81.8c-1.2,0-2.4-0.5-3.4-1.5l0.3-0.3c1.6,1.6,4,1.8,5.5,0.4l0.3,0.3C237.5,81.5,236.6,81.8,235.6,81.8
			z" />
    <path class="st0" d="M237,80.4c-0.4,0-0.8-0.1-1.3-0.3c-1-0.4-2.1-1.2-3.1-2.2l0.3-0.3c0.9,1,2,1.7,2.9,2.1s1.7,0.4,2.1,0l0.3,0.3
			C237.9,80.3,237.5,80.4,237,80.4z" />
    <path class="st0" d="M238.1,79.7c-1-0.4-1.8-1.3-2.1-2.3c-0.4-1.1-0.3-2.3,0.2-3.3l0.3,0.1c-0.4,1-0.5,2.1-0.1,3.1
			c0.3,1,1,1.7,1.9,2.1L238.1,79.7z" />
    <path class="st0" d="M238.8,79.2c-0.7-0.3-1-1.1-1.1-2.2c0-1.1,0.3-2.4,0.8-3.7l0.3,0.1c-0.5,1.2-0.8,2.5-0.8,3.5s0.3,1.6,0.8,1.9
			V79.2z" />
    <g>
      <path class="st0" d="M249.6,102.8h-9.8c-0.1,0-0.2-0.1-0.2-0.2V89.5c0-0.1,0-0.1,0.1-0.1c0,0,0.1,0,0.2,0
				c0.6,0.1,1.2,0.1,1.9,0.1c2.8-0.1,5.4-2.3,7.7-6.5c0-0.1,0.1-0.1,0.2-0.1c0.1,0,0.1,0.1,0.1,0.2v19.6
				C249.8,102.7,249.7,102.8,249.6,102.8z M240.1,102.4h9.4V83.7c-2.3,3.9-4.8,5.9-7.7,6c-0.7,0-1.2,0-1.7-0.1V102.4z" />
      <g>
        <path class="st0" d="M249.6,83.5V83c-0.1,0.1-0.1,0.2-0.2,0.3L249.6,83.5z" />
        <path class="st0" d="M249.5,102.1l0.2,0.2v-0.8l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2v-0.8l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2v-0.8
					l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2v-0.8l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2V96l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2v-0.8
					l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2v-0.8l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2V92l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2v-0.8
					l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2v-0.8l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2V88l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2v-0.8
					l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2v-0.8l-0.2,0.2l-0.4-0.4l0.4-0.4l0.2,0.2V84l-0.2,0.2l-0.3-0.3c-0.1,0.1-0.1,0.2-0.2,0.3
					l0.2,0.2l-0.4,0.4l-0.1-0.1c-0.1,0.1-0.1,0.2-0.2,0.3l0.1,0.1l-0.4,0.4l0,0c-0.9,1.2-1.9,2.3-3,3l-0.3,0.3l-0.1-0.1
					c-0.1,0.1-0.2,0.1-0.3,0.2l0.2,0.2l-0.4,0.4l-0.3-0.3c-0.3,0.1-0.7,0.2-1,0.3l0,0l0,0c-0.1,0-0.3,0.1-0.5,0.1l0.2,0.2l-0.4,0.4
					l-0.4-0.4l0.2-0.2c-0.3,0-0.6,0-0.9,0l0.2,0.2l-0.4,0.4l-0.4-0.4l0.2-0.2c-0.2,0-0.3,0-0.5-0.1l0,0l0,0h-0.1v0.7L240,90l0.4,0.4
					l-0.4,0.4l-0.1-0.1v0.8l0.1-0.1l0.4,0.4l-0.4,0.4l-0.1-0.1v0.8l0.1-0.1l0.4,0.4l-0.4,0.4l-0.1-0.1v0.8L240,94l0.4,0.4l-0.4,0.4
					l-0.1-0.1v0.8l0.1-0.1l0.4,0.4l-0.4,0.4l-0.1-0.1v0.8l0.1-0.1l0.4,0.4l-0.4,0.4l-0.1-0.1v0.8l0.1-0.1l0.4,0.4L240,99l-0.1-0.1
					v0.8l0.1-0.1l0.4,0.4l-0.4,0.4l-0.1-0.1v0.8l0.1-0.1l0.4,0.4l-0.4,0.4l-0.1-0.1v0.8l0.1-0.1l0.4,0.4l-0.1,0.1h0.7l-0.1-0.1
					l0.4-0.4l0.4,0.4l-0.1,0.1h0.7l-0.1-0.1l0.4-0.4l0.4,0.4l-0.1,0.1h0.7l-0.1-0.1l0.4-0.4l0.4,0.4l-0.1,0.1h0.7l-0.1-0.1l0.4-0.4
					l0.4,0.4l-0.1,0.1h0.7l-0.1-0.1l0.4-0.4l0.4,0.4l-0.1,0.1h0.7l-0.1-0.1l0.4-0.4l0.4,0.4l-0.1,0.1h0.7l-0.1-0.1L249.5,102.1z
					 M249.2,100.5l-0.4,0.4l-0.4-0.4l0.4-0.4L249.2,100.5z M243.8,96.5l-0.4,0.4l-0.4-0.4l0.4-0.4L243.8,96.5z M243,95.1l0.4-0.4
					l0.4,0.4l-0.4,0.4L243,95.1z M243.6,95.8l0.4-0.4l0.4,0.4l-0.4,0.4L243.6,95.8z M245.7,93.8l0.4-0.4l0.4,0.4l-0.4,0.4
					L245.7,93.8z M246.5,95.1l-0.4,0.4l-0.4-0.4l0.4-0.4L246.5,95.1z M245.8,94.5l-0.4,0.4l-0.4-0.4l0.4-0.4L245.8,94.5z
					 M245.2,95.1l-0.4,0.4l-0.4-0.4l0.4-0.4L245.2,95.1z M244.7,96.1l0.4,0.4l-0.4,0.4l-0.4-0.4L244.7,96.1z M245,95.8l0.4-0.4
					l0.4,0.4l-0.4,0.4L245,95.8z M246.1,96.1l0.4,0.4l-0.4,0.4l-0.4-0.4L246.1,96.1z M246.4,95.8l0.4-0.4l0.4,0.4l-0.4,0.4
					L246.4,95.8z M246.4,94.5l0.4-0.4l0.4,0.4l-0.4,0.4L246.4,94.5z M246.4,93.1l0.4-0.4l0.4,0.4l-0.4,0.4L246.4,93.1z M246.4,91.8
					l0.4-0.4l0.4,0.4l-0.4,0.4L246.4,91.8z M246.5,92.4l-0.4,0.4l-0.4-0.4l0.4-0.4L246.5,92.4z M245.8,93.1l-0.4,0.4l-0.4-0.4
					l0.4-0.4L245.8,93.1z M245.2,93.8l-0.4,0.4l-0.4-0.4l0.4-0.4L245.2,93.8z M244.5,94.5l-0.4,0.4l-0.4-0.4l0.4-0.4L244.5,94.5z
					 M243.4,94.2l-0.4-0.4l0.4-0.4l0.4,0.4L243.4,94.2z M243.1,94.5l-0.4,0.4l-0.4-0.4l0.4-0.4L243.1,94.5z M243.1,95.8l-0.4,0.4
					l-0.4-0.4l0.4-0.4L243.1,95.8z M243.1,97.1l-0.4,0.4l-0.4-0.4l0.4-0.4L243.1,97.1z M243.4,97.4l0.4,0.4l-0.4,0.4l-0.4-0.4
					L243.4,97.4z M243.6,97.1l0.4-0.4l0.4,0.4l-0.4,0.4L243.6,97.1z M244.7,97.4l0.4,0.4l-0.4,0.4l-0.4-0.4L244.7,97.4z M245,97.1
					l0.4-0.4l0.4,0.4l-0.4,0.4L245,97.1z M246.1,97.4l0.4,0.4l-0.4,0.4l-0.4-0.4L246.1,97.4z M246.4,97.1l0.4-0.4l0.4,0.4l-0.4,0.4
					L246.4,97.1z M247.4,97.4l0.4,0.4l-0.4,0.4l-0.4-0.4L247.4,97.4z M247,96.5l0.4-0.4l0.4,0.4l-0.4,0.4L247,96.5z M247,95.1
					l0.4-0.4l0.4,0.4l-0.4,0.4L247,95.1z M247,93.8l0.4-0.4l0.4,0.4l-0.4,0.4L247,93.8z M247,92.4l0.4-0.4l0.4,0.4l-0.4,0.4
					L247,92.4z M247,91.1l0.4-0.4l0.4,0.4l-0.4,0.4L247,91.1z M247,89.8l0.4-0.4l0.4,0.4l-0.4,0.4L247,89.8z M247.2,90.4l-0.4,0.4
					l-0.4-0.4l0.4-0.4L247.2,90.4z M246.5,91.1l-0.4,0.4l-0.4-0.4l0.4-0.4L246.5,91.1z M245.8,91.8l-0.4,0.4l-0.4-0.4l0.4-0.4
					L245.8,91.8z M245.2,92.4l-0.4,0.4l-0.4-0.4l0.4-0.4L245.2,92.4z M244.5,93.1l-0.4,0.4l-0.4-0.4l0.4-0.4L244.5,93.1z
					 M243.4,92.9l-0.4-0.4l0.4-0.4l0.4,0.4L243.4,92.9z M243.1,93.1l-0.4,0.4l-0.4-0.4l0.4-0.4L243.1,93.1z M242.4,93.8l-0.4,0.4
					l-0.4-0.4l0.4-0.4L242.4,93.8z M242.4,95.1l-0.4,0.4l-0.4-0.4l0.4-0.4L242.4,95.1z M242.4,96.5l-0.4,0.4l-0.4-0.4l0.4-0.4
					L242.4,96.5z M242.4,97.8l-0.4,0.4l-0.4-0.4l0.4-0.4L242.4,97.8z M242.4,99.1l-0.4,0.4l-0.4-0.4l0.4-0.4L242.4,99.1z
					 M242.3,98.5l0.4-0.4l0.4,0.4l-0.4,0.4L242.3,98.5z M243.4,98.7l0.4,0.4l-0.4,0.4l-0.4-0.4L243.4,98.7z M243.6,98.5l0.4-0.4
					l0.4,0.4l-0.4,0.4L243.6,98.5z M244.7,98.7l0.4,0.4l-0.4,0.4l-0.4-0.4L244.7,98.7z M245,98.5l0.4-0.4l0.4,0.4l-0.4,0.4L245,98.5
					z M246.1,98.7l0.4,0.4l-0.4,0.4l-0.4-0.4L246.1,98.7z M246.4,98.5l0.4-0.4l0.4,0.4l-0.4,0.4L246.4,98.5z M247.4,98.7l0.4,0.4
					l-0.4,0.4l-0.4-0.4L247.4,98.7z M247.7,98.5l0.4-0.4l0.4,0.4l-0.4,0.4L247.7,98.5z M247.7,97.1l0.4-0.4l0.4,0.4l-0.4,0.4
					L247.7,97.1z M247.7,95.8l0.4-0.4l0.4,0.4l-0.4,0.4L247.7,95.8z M247.7,94.5l0.4-0.4l0.4,0.4l-0.4,0.4L247.7,94.5z M247.7,93.1
					l0.4-0.4l0.4,0.4l-0.4,0.4L247.7,93.1z M247.7,91.8l0.4-0.4l0.4,0.4l-0.4,0.4L247.7,91.8z M247.7,90.4l0.4-0.4l0.4,0.4l-0.4,0.4
					L247.7,90.4z M247.7,89.1l0.4-0.4l0.4,0.4l-0.4,0.4L247.7,89.1z M247.7,87.7l0.4-0.4l0.4,0.4l-0.4,0.4L247.7,87.7z M247.9,88.4
					l-0.4,0.4l-0.4-0.4l0.4-0.4L247.9,88.4z M247.2,89.1l-0.4,0.4l-0.4-0.4l0.4-0.4L247.2,89.1z M246.5,89.8l-0.4,0.4l-0.4-0.4
					l0.4-0.4L246.5,89.8z M245.8,90.4l-0.4,0.4l-0.4-0.4l0.4-0.4L245.8,90.4z M245.2,91.1l-0.4,0.4l-0.4-0.4l0.4-0.4L245.2,91.1z
					 M244.5,91.8l-0.4,0.4l-0.4-0.4l0.4-0.4L244.5,91.8z M243.4,91.5l-0.4-0.4l0.4-0.4l0.4,0.4L243.4,91.5z M243.1,91.8l-0.4,0.4
					l-0.4-0.4l0.4-0.4L243.1,91.8z M242.4,92.4l-0.4,0.4l-0.4-0.4L242,92L242.4,92.4z M241.3,92.2l-0.4-0.4l0.4-0.4l0.4,0.4
					L241.3,92.2z M241.8,93.1l-0.4,0.4l-0.4-0.4l0.4-0.4L241.8,93.1z M241.8,94.5l-0.4,0.4l-0.4-0.4l0.4-0.4L241.8,94.5z
					 M241.8,95.8l-0.4,0.4l-0.4-0.4l0.4-0.4L241.8,95.8z M241.8,97.1l-0.4,0.4l-0.4-0.4l0.4-0.4L241.8,97.1z M241.8,98.5l-0.4,0.4
					l-0.4-0.4l0.4-0.4L241.8,98.5z M241.8,99.8l-0.4,0.4l-0.4-0.4l0.4-0.4L241.8,99.8z M242,100.1l0.4,0.4l-0.4,0.4l-0.4-0.4
					L242,100.1z M242.3,99.8l0.4-0.4l0.4,0.4l-0.4,0.4L242.3,99.8z M243.4,100.1l0.4,0.4l-0.4,0.4l-0.4-0.4L243.4,100.1z
					 M243.6,99.8l0.4-0.4l0.4,0.4l-0.4,0.4L243.6,99.8z M244.7,100.1l0.4,0.4l-0.4,0.4l-0.4-0.4L244.7,100.1z M245,99.8l0.4-0.4
					l0.4,0.4l-0.4,0.4L245,99.8z M246.1,100.1l0.4,0.4l-0.4,0.4l-0.4-0.4L246.1,100.1z M246.4,99.8l0.4-0.4l0.4,0.4l-0.4,0.4
					L246.4,99.8z M247.4,100.1l0.4,0.4l-0.4,0.4l-0.4-0.4L247.4,100.1z M247.7,99.8l0.4-0.4l0.4,0.4l-0.4,0.4L247.7,99.8z
					 M249.2,99.1l-0.4,0.4l-0.4-0.4l0.4-0.4L249.2,99.1z M249.2,97.8l-0.4,0.4l-0.4-0.4l0.4-0.4L249.2,97.8z M249.2,96.5l-0.4,0.4
					l-0.4-0.4l0.4-0.4L249.2,96.5z M249.2,95.1l-0.4,0.4l-0.4-0.4l0.4-0.4L249.2,95.1z M249.2,93.8l-0.4,0.4l-0.4-0.4l0.4-0.4
					L249.2,93.8z M249.2,92.4l-0.4,0.4l-0.4-0.4l0.4-0.4L249.2,92.4z M249.2,91.1l-0.4,0.4l-0.4-0.4l0.4-0.4L249.2,91.1z
					 M249.2,89.8l-0.4,0.4l-0.4-0.4l0.4-0.4L249.2,89.8z M249.2,88.4l-0.4,0.4l-0.4-0.4l0.4-0.4L249.2,88.4z M249.2,87.1l-0.4,0.4
					l-0.4-0.4l0.4-0.4L249.2,87.1z M248.8,85.3l0.4,0.4l-0.4,0.4l-0.4-0.4L248.8,85.3z M248.1,86l0.4,0.4l-0.4,0.4l-0.4-0.4
					L248.1,86z M247.4,86.7l0.4,0.4l-0.4,0.4l-0.4-0.4L247.4,86.7z M246.8,87.3l0.4,0.4l-0.4,0.4l-0.4-0.4L246.8,87.3z M246.1,88
					l0.4,0.4l-0.4,0.4l-0.4-0.4L246.1,88z M245.4,88.7l0.4,0.4l-0.4,0.4l-0.4-0.4L245.4,88.7z M244.7,89.3l0.4,0.4l-0.4,0.4
					l-0.4-0.4L244.7,89.3z M244.5,90.4l-0.4,0.4l-0.4-0.4l0.4-0.4L244.5,90.4z M243.4,89.3l0.4,0.4l-0.4,0.4l-0.4-0.4L243.4,89.3z
					 M242.7,90l0.4,0.4l-0.4,0.4l-0.4-0.4L242.7,90z M242.4,91.1l-0.4,0.4l-0.4-0.4l0.4-0.4L242.4,91.1z M241.3,90l0.4,0.4l-0.4,0.4
					l-0.4-0.4L241.3,90z M240.3,91.1l0.4-0.4l0.4,0.4l-0.4,0.4L240.3,91.1z M240.3,92.4l0.4-0.4l0.4,0.4l-0.4,0.4L240.3,92.4z
					 M240.3,93.8l0.4-0.4l0.4,0.4l-0.4,0.4L240.3,93.8z M240.3,95.1l0.4-0.4l0.4,0.4l-0.4,0.4L240.3,95.1z M240.3,96.5l0.4-0.4
					l0.4,0.4l-0.4,0.4L240.3,96.5z M240.3,97.8l0.4-0.4l0.4,0.4l-0.4,0.4L240.3,97.8z M240.3,99.1l0.4-0.4l0.4,0.4l-0.4,0.4
					L240.3,99.1z M240.3,100.5l0.4-0.4l0.4,0.4l-0.4,0.4L240.3,100.5z M240.7,102.2l-0.4-0.4l0.4-0.4l0.4,0.4L240.7,102.2z
					 M240.9,101.2l0.4-0.4l0.4,0.4l-0.4,0.4L240.9,101.2z M242,102.2l-0.4-0.4l0.4-0.4l0.4,0.4L242,102.2z M242.3,101.2l0.4-0.4
					l0.4,0.4l-0.4,0.4L242.3,101.2z M243.4,102.2l-0.4-0.4l0.4-0.4l0.4,0.4L243.4,102.2z M243.6,101.2l0.4-0.4l0.4,0.4l-0.4,0.4
					L243.6,101.2z M244.7,102.2l-0.4-0.4l0.4-0.4l0.4,0.4L244.7,102.2z M245,101.2l0.4-0.4l0.4,0.4l-0.4,0.4L245,101.2z
					 M246.1,102.2l-0.4-0.4l0.4-0.4l0.4,0.4L246.1,102.2z M246.4,101.2l0.4-0.4l0.4,0.4l-0.4,0.4L246.4,101.2z M247.4,102.2
					l-0.4-0.4l0.4-0.4l0.4,0.4L247.4,102.2z M247.7,101.2l0.4-0.4l0.4,0.4l-0.4,0.4L247.7,101.2z M248.4,101.8l0.4-0.4l0.4,0.4
					l-0.4,0.4L248.4,101.8z" />
      </g>
    </g>
  </g>
  <g>
    <path class="st0" d="M230.3,52.7c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2v3.1
			C230.5,52.6,230.4,52.7,230.3,52.7z" />
  </g>
  <g>
    <path class="st0" d="M231.5,52.7c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2v3.1
			C231.7,52.6,231.6,52.7,231.5,52.7z" />
  </g>
  <g>
    <path class="st0" d="M232.6,52.7c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2v3.1
			C232.9,52.6,232.8,52.7,232.6,52.7z" />
  </g>
  <g>
    <path class="st0" d="M233.8,52.7c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2v3.1
			C234,52.6,234,52.7,233.8,52.7z" />
  </g>
  <g>
    <path class="st0" d="M235,52.7c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2v3.1
			C235.2,52.6,235.1,52.7,235,52.7z" />
  </g>
  <g>
    <path class="st0" d="M247.2,52.2c-0.7,0-1.4-0.6-1.4-1.4c0-0.7,0.6-1.4,1.4-1.4c0.7,0,1.4,0.6,1.4,1.4
			C248.5,51.6,247.9,52.2,247.2,52.2z M247.2,50c-0.5,0-0.9,0.4-0.9,0.9s0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9
			C248.1,50.4,247.7,50,247.2,50z" />
  </g>
  <path class="st0" d="M239,50.7v0.4h-0.4v-0.4H239 M239,50.2h-0.4c-0.2,0-0.4,0.2-0.4,0.4V51c0,0.2,0.2,0.4,0.4,0.4h0.4
		c0.2,0,0.4-0.2,0.4-0.4v-0.4C239.4,50.4,239.2,50.2,239,50.2L239,50.2z" />
  <path class="st0" d="M241.4,50.7v0.4H241v-0.4H241.4 M241.4,50.2H241c-0.2,0-0.4,0.2-0.4,0.4V51c0,0.2,0.2,0.4,0.4,0.4h0.4
		c0.2,0,0.4-0.2,0.4-0.4v-0.4C241.8,50.4,241.6,50.2,241.4,50.2L241.4,50.2z" />
  <path class="st0" d="M243.8,50.7v0.4h-0.4v-0.4H243.8 M243.8,50.2h-0.4c-0.2,0-0.4,0.2-0.4,0.4V51c0,0.2,0.2,0.4,0.4,0.4h0.4
		c0.2,0,0.4-0.2,0.4-0.4v-0.4C244.2,50.4,244,50.2,243.8,50.2L243.8,50.2z" />
  <g>
    <path class="st0" d="M230.3,61.2c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2V61
			C230.5,61.1,230.4,61.2,230.3,61.2z" />
  </g>
  <g>
    <path class="st0" d="M231.5,61.2c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2V61
			C231.7,61.1,231.6,61.2,231.5,61.2z" />
  </g>
  <g>
    <path class="st0" d="M232.6,61.2c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2V61
			C232.9,61.1,232.8,61.2,232.6,61.2z" />
  </g>
  <g>
    <path class="st0" d="M233.8,61.2c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2V61
			C234,61.1,234,61.2,233.8,61.2z" />
  </g>
  <g>
    <path class="st0" d="M235,61.2c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2V61
			C235.2,61.1,235.1,61.2,235,61.2z" />
  </g>
  <g>
    <path class="st0" d="M247.2,60.8c-0.7,0-1.4-0.6-1.4-1.4c0-0.7,0.6-1.4,1.4-1.4c0.7,0,1.4,0.6,1.4,1.4
			C248.5,60.2,247.9,60.8,247.2,60.8z M247.2,58.5c-0.5,0-0.9,0.4-0.9,0.9s0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9S247.7,58.5,247.2,58.5z" />
  </g>
  <path class="st0" d="M239,59.2v0.4h-0.4v-0.4H239 M239,58.8h-0.4c-0.2,0-0.4,0.2-0.4,0.4v0.4c0,0.2,0.2,0.4,0.4,0.4h0.4
		c0.2,0,0.4-0.2,0.4-0.4v-0.4C239.4,58.9,239.2,58.8,239,58.8L239,58.8z" />
  <path class="st0" d="M241.4,59.2v0.4H241v-0.4H241.4 M241.4,58.8H241c-0.2,0-0.4,0.2-0.4,0.4v0.4c0,0.2,0.2,0.4,0.4,0.4h0.4
		c0.2,0,0.4-0.2,0.4-0.4v-0.4C241.8,58.9,241.6,58.8,241.4,58.8L241.4,58.8z" />
  <path class="st0" d="M243.8,59.2v0.4h-0.4v-0.4H243.8 M243.8,58.8h-0.4c-0.2,0-0.4,0.2-0.4,0.4v0.4c0,0.2,0.2,0.4,0.4,0.4h0.4
		c0.2,0,0.4-0.2,0.4-0.4v-0.4C244.2,58.9,244,58.8,243.8,58.8L243.8,58.8z" />
  <g>
    <path class="st0" d="M230.3,69.7c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2v3.1
			C230.5,69.7,230.4,69.7,230.3,69.7z" />
  </g>
  <g>
    <path class="st0" d="M231.5,69.7c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2v3.1
			C231.7,69.7,231.6,69.7,231.5,69.7z" />
  </g>
  <g>
    <path class="st0" d="M232.6,69.7c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2v3.1
			C232.9,69.7,232.8,69.7,232.6,69.7z" />
  </g>
  <g>
    <path class="st0" d="M233.8,69.7c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2v3.1
			C234,69.7,234,69.7,233.8,69.7z" />
  </g>
  <g>
    <path class="st0" d="M235,69.7c-0.1,0-0.2-0.1-0.2-0.2v-3.1c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2v3.1
			C235.2,69.7,235.1,69.7,235,69.7z" />
  </g>
  <g>
    <path class="st0" d="M247.2,69.3c-0.7,0-1.4-0.6-1.4-1.4c0-0.7,0.6-1.4,1.4-1.4c0.7,0,1.4,0.6,1.4,1.4S247.9,69.3,247.2,69.3z
			 M247.2,67.1c-0.5,0-0.9,0.4-0.9,0.9s0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9C248.1,67.5,247.7,67.1,247.2,67.1z" />
  </g>
  <path class="st0" d="M239,67.7v0.4h-0.4v-0.4H239 M239,67.3h-0.4c-0.2,0-0.4,0.2-0.4,0.4v0.4c0,0.2,0.2,0.4,0.4,0.4h0.4
		c0.2,0,0.4-0.2,0.4-0.4v-0.4C239.4,67.5,239.2,67.3,239,67.3L239,67.3z" />
  <path class="st0" d="M241.4,67.7v0.4H241v-0.4H241.4 M241.4,67.3H241c-0.2,0-0.4,0.2-0.4,0.4v0.4c0,0.2,0.2,0.4,0.4,0.4h0.4
		c0.2,0,0.4-0.2,0.4-0.4v-0.4C241.8,67.5,241.6,67.3,241.4,67.3L241.4,67.3z" />
  <path class="st0" d="M243.8,67.7v0.4h-0.4v-0.4H243.8 M243.8,67.3h-0.4c-0.2,0-0.4,0.2-0.4,0.4v0.4c0,0.2,0.2,0.4,0.4,0.4h0.4
		c0.2,0,0.4-0.2,0.4-0.4v-0.4C244.2,67.5,244,67.3,243.8,67.3L243.8,67.3z" />
  <path class="st0" d="M250.8,54.5c0.1,0,0.2-0.1,0.2-0.2v-6.7c0-0.1-0.1-0.2-0.2-0.2h-22.5c-0.1,0-0.2,0.1-0.2,0.2V51
		c-2,0.4-3.6,2.2-3.6,4.4c0,2,1.3,3.7,3.1,4.3c-1.8,0.6-3.1,2.3-3.1,4.3c0,2.2,1.5,4,3.6,4.4v3.1c0,0.1,0.1,0.2,0.2,0.2h22.5
		c0.1,0,0.2-0.1,0.2-0.2v-6.7c0-0.1-0.1-0.2-0.2-0.2h-2.9V63h2.9c0.1,0,0.2-0.1,0.2-0.2V56c0-0.1-0.1-0.2-0.2-0.2h-2.9v-1.4h2.9
		V54.5z M228.5,47.7h22V54h-22v-2.8v-0.4V47.7z M224.9,55.3c0-1.9,1.4-3.5,3.1-4v2.9c0,0.1,0.1,0.2,0.2,0.2h2.9v1.4h-2.9
		c-0.1,0-0.2,0.1-0.2,0.2v3.2C226.3,58.8,224.9,57.2,224.9,55.3z M224.9,63.8c0-1.9,1.4-3.5,3.1-4v2.9c0,0.1,0.1,0.2,0.2,0.2h2.9
		v1.4h-2.9c-0.1,0-0.2,0.1-0.2,0.2v3.2C226.3,67.4,224.9,65.7,224.9,63.8z M250.5,71.1h-22v-2.8v-0.4v-3h22V71.1L250.5,71.1z
		 M247.4,64.4h-15.7V63h15.7V64.4z M250.5,62.6h-22v-2.8v-0.1v-0.4v-0.1v-3h22V62.6L250.5,62.6z M247.4,55.8h-15.7v-1.4h15.7V55.8z" />
</g>
<g id="poster">

<svg x="105" y="2" width="27" height="27" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione-monotone"
      preserveAspectRatio="xMidYMid meet">
  <path class="st0" d="M55.909 2L40.938 9.75l-13.875-6L8.091 5L2 58.25l19.615-1.667L43.386 62L62 55.25L55.909 2m-1.657 3.109l5.582 48.799l-16.064 5.825l-.089-1.874l14.171-5.35L53.01 7.916l-11.445 5.428l-.078-1.626l.371-.191l12.394-6.418m-11.637 30.34c.222-.472.44-1.135.544-2.065c0 0 1.102.054 2.458 3.009c0 0 .592-.059.297-1.988c0 0 2.117-.853.975-4.604c0 0 1.776 2.446 1.186-.734c0 0 1.948-2.388-.379-3.976c0 0 .08-1.761 1.479-1.535c0 0 1.398-3.636.724.681c0 0 .04.854.929 1.817c0 0 .383-1.419-.296-2.949c0 0 1.399-2.618 1.271-4.887c0 0-4.532 1.681-9.575 1.179c0 0 .246-.938-.443-1.465l-.141-2.965l.12-.057l9.984-4.734l4.488 41.341l-12.629 4.769l-.992-20.837m-1.838-17.594c-.521.743-1.967 3.028-1.088 4.396c0 0-.426 2.963-1.02-1.359c0 0-.971 2.551-2.285 1.982c0 0-.361 2.582-1.188.852c0 0 .677.285.826-.51c0 0-1.909-2.045-3.05 1.047c0 0-.932.371-.571 1.821c0 0 .654-1.196.994.625c0 0 .361-.284.512-2.615c0 0 .906-.452.206 1.39c0 0 2.076.033-1.141 1.874c0 0-.178-.03-.318-.736c0 0-.487 1.7-1.485 2.303c0 0 .234.679-.506.991c0 0-.401 1.052.553 1.052c0 0 .825-2.528 2.393-.539c0 0 .299-.113-.168-1.108c0 0 .824.316 1.143 1.619c0 0 .509-.088.59-1.221c0 0 .639-1.448 1.678.257c0 0-1.379-.399-1.737.992c0 0 .652-.285 1.058.114c0 0 .041.649-.375.9c.18.338.375.662.647.936a.449.449 0 0 1 .077.563c.734 1.256 2.09 2.928 3.039.259c0 0-1.27.721-1.695-1.268c0 0 2.563.326 3.745 2.897l.995 20.948l-19.932-5.59l.299-2.957c.414 1.061.899 1.492.899 1.492c-.563-4.615 2.767-7.572 2.767-7.572c.647-3.168-.998-4.59-2.523-5.23l.783-7.748c.314-.391.499-.652.499-.652c-.113-.389-.223-.73-.328-1.042l.759-7.518c.638.777.711 1.483.532 2.125c-.821 2.953.235 3.858.235 3.858c.641-2.494 2.841-2.892 2.841-2.892c-.126-2.332 1.228-4.983 1.228-4.983c-1.473-2.531-3.58-.824-4.684.384l.086-.849c.226-.291.462-.608.717-.97c0 0-.211-.145-.594-.251l.672-6.655l13.684 5.672l.096.04l.135 2.876M25.195 15.82c-.682.032-1.555.267-2.582.977c0 0-.488 4.482 2.314 1.673l-.313 3.101c-.366-1.224-1.234-1.65-1.234-1.65c-.85.514-.765 1.194-.765 1.194c.771.116 1.242 1.044 1.519 1.914c-.156.239-.423.512-.884.557c0 0 .537.807 1.057 1.033l-.057.556c-1.21-1.813-1.734 1.83-1.734 1.83c-2.991-3.333.794-5.001.794-5.001c-2.317-.979-3.39-3.785-3.39-3.785c-.113 1.743-.792 1.666-.792 1.666c-5.31-3.104-6.266 1.895-6.266 1.895c.843 2.648-.964 2.951-.964 2.951c1.75.302 2.653-2.121 2.653-2.121c3.618 1.818 1.697 8.331 1.697 8.331c1.411.83 1.807 3.559 1.807 3.559c.983.298 1.99.9 2.696 1.377c.137-.123.278-.24.426-.349c-1.65-1.166-1.653-3.054-1.653-3.054c1.497 0 3.089-1.29 4.238-2.476l-.62 6.143a7.688 7.688 0 0 0-.847-.163a3.727 3.727 0 0 0-.746.474l.122.095c-1.664 3.197.586 4.479.959 4.664l-.955 9.45l-13.236 1.035l4.415-41.814l13.018-.766l-.677 6.704m-2.674 36.423l20.159 5.654l.09 1.889l-20.496-5.1l.247-2.443m17.965-40.509l.076 1.59L27.02 7.711l.174-1.726l12.95 5.601l.342.148M9.889 6.886l16.317-1.075l-.181 1.794l-14.529.854l-4.737 44.874l14.765-1.157l-.246 2.428l-17.013 1.447L9.889 6.886" fill="#000000"></path><path class="st0" d="M32.062 36.617s2.122.397 1.273 4.486c0 0 .339 3.187 2.2 2.896c0 0 .508-4.599 2.881-8.122c0 0-.962.958-2.053-2.219c-.165.12-.389.148-.576-.038c-.47-.469-.754-1.06-1.06-1.654a.496.496 0 0 1-.051-.277c-1.544-.576-4.671-1.154-5.114 3.393c.001 0 .592 3.13 2.5 1.535" fill="#000000"></path><path class="st0" d="M31.09 25.995c.146 2.048.42 2.67.779 1.819c.361-.844-.779-1.819-.779-1.819" fill="#000000"></path><path class="st0" d="M30.449 27.928s.597-.088.426-.839c0 0-.426.044-.426.839" fill="#000000"></path><path class="st0" d="M30.219 23.811s-1.505 0-.973.769c.529.767.973-.769.973-.769" fill="#000000"></path><path class="st0" d="M37.74 42.468s.46-.938.445-2.384c.001 0-1.463 1.672-.445 2.384" fill="#000000"></path><path class="st0" d="M47.226 36.59s-1.06.967-.866 1.848c.191.884 1.121-.174.866-1.848" fill="#000000"></path><path class="st0" d="M51.465 39.717c.465-.814-2.547-1.822-2.547-1.822c.595.882 2.125 2.548 2.547 1.822" fill="#000000"></path><path class="st0" d="M48.096 39.891c.707-1.21-2.14-.631-2.14-.631s1.865 1.109 2.14.631" fill="#000000"></path><path class="st0" d="M49.215 40.143s-.57 1.275-2.688 1.812c0 0 .447 1.025 0 2.958c0 0 2.138-2.728 3.37 1.218c0 0 1.057.574 1.798-2.999c0 0-.889-1.287-1.185-3.117c.001-.001-.293 2.344-1.295.128" fill="#000000"></path><path class="st0" d="M49.633 28.51c.135-.113.24-.154.24-.154c-1.037-1.677-.658.74-.658.74c.067-.159.146-.281.227-.384c.055.716-.117 1.783-1.235 2.797c-.001 0 2.397-.904 1.426-2.999" fill="#000000"></path><path class="st0" d="M31.332 15.955c.523-1.226-1.121-2.622-1.121-2.622c.211 2.947.602 3.847 1.121 2.622" fill="#000000"></path><path class="st0" d="M29.288 16.116s.851-.126.61-1.204c0 0-.61.061-.61 1.204" fill="#000000"></path></svg>


</g>





<g id="radiator">
  <path class="st0" d="M279,77.7v1.1l0,0V77.7L279,77.7z M279,97.6v1.1l0,0V97.6L279,97.6z" />
  <path class="st0" d="M269.6,99c0.1,0.1,0.2,0.2,0.3,0.2C269.8,99.2,269.6,99.1,269.6,99z M270,98.1L270,98.1L270,98.1
		c0,0.2,0,0.3,0.2,0.4C270,98.4,270,98.3,270,98.1z" />
  <path class="st0" d="M278.2,76.6V80l0,0V76.6L278.2,76.6z" />
  <path class="st0" d="M297.6,96.8h-0.1c-0.2,0-0.4-0.2-0.4-0.4V80c0-0.2,0.2-0.4,0.4-0.4h0.1c0.7,0,1.3-0.6,1.3-1.3
		s-0.6-1.3-1.3-1.3h-0.1c-0.2,0-0.4-0.2-0.4-0.4v-0.1c0-0.5-0.4-1.3-1.3-1.3s-1.3,0.8-1.3,1.3v0.1c0,0.2-0.2,0.4-0.4,0.4h-0.2
		c-0.2,0-0.4-0.2-0.4-0.4v-0.1c0-0.5-0.4-1.3-1.3-1.3s-1.3,0.8-1.3,1.3v0.1c0,0.2-0.2,0.4-0.4,0.4h-0.2c-0.2,0-0.4-0.2-0.4-0.4v-0.1
		c0-0.5-0.4-1.3-1.3-1.3s-1.3,0.8-1.3,1.3v0.1c0,0.2-0.2,0.4-0.4,0.4h-0.2c-0.2,0-0.4-0.2-0.4-0.4v-0.1c0-0.5-0.4-1.3-1.3-1.3
		s-1.3,0.8-1.3,1.3v0.1c0,0.2-0.2,0.4-0.4,0.4h-0.2c-0.2,0-0.4-0.2-0.4-0.4v-0.1c0-0.5-0.4-1.3-1.3-1.3s-1.3,0.8-1.3,1.3v0.1
		c0,0.2-0.2,0.4-0.4,0.4h-0.2c-0.2,0-0.4-0.2-0.4-0.4v-0.2c0-0.5-0.4-1.3-1.3-1.3s-1.3,0.8-1.3,1.3v0.1c0,0.2-0.2,0.4-0.4,0.4h-0.2
		c-0.2,0-0.4-0.2-0.4-0.4v-0.1c0-0.5-0.4-1.3-1.3-1.3s-1.3,0.8-1.3,1.3v0.1c0,0.2-0.2,0.4-0.4,0.4h-0.6v-0.2c0-0.4-0.4-0.8-0.8-0.8
		h-1c-0.4,0-0.8,0.4-0.8,0.8v2.9c0,0.4,0.4,0.8,0.8,0.8h1c0.4,0,0.8-0.4,0.8-0.8v-0.2h0.6c0.2,0,0.4,0.2,0.4,0.4v16.4
		c0,0.2-0.2,0.4-0.4,0.4h-1.9c-0.2,0-0.5,0.1-0.7,0.2c-0.1,0-0.2,0.1-0.2,0.2c-0.1,0.1-0.1,0.1-0.2,0.2c0,0-0.1,0.1-0.1,0.2
		s-0.1,0.2-0.1,0.3l0,0c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0.2,0.2,0.5,0.4,0.6c0.1,0.1,0.2,0.2,0.3,0.2
		c0.2,0.1,0.4,0.2,0.6,0.2h1.9c0.2,0,0.4,0.2,0.4,0.4v3.7c0,0.5,0.4,1.3,1.3,1.3s1.3-0.8,1.3-1.3c0-0.1,0-2.3,2.3-2.3h14.5
		c2.2,0,2.3,2.1,2.3,2.3c0,0.5,0.4,1.3,1.3,1.3s1.3-0.8,1.3-1.3v-3.7c0-0.2,0.2-0.4,0.4-0.4h0.1c0.7,0,1.3-0.6,1.3-1.3
		C298.9,97.4,298.3,96.8,297.6,96.8z M297,77.7c0.1,0,0.3,0.1,0.4,0.1h0.1c0.3,0,0.5,0.2,0.5,0.5s-0.2,0.5-0.5,0.5h-0.1
		c-0.2,0-0.3,0-0.4,0.1V77.7z M271,79.7h-1v-2.9h1V79.7z M270.5,98.6c-0.2,0-0.3-0.1-0.4-0.2s-0.2-0.2-0.2-0.4v-0.1
		c0-0.1,0.1-0.2,0.1-0.2s0.1-0.1,0.2-0.1s0.1,0,0.2,0c0.3,0,0.5,0.2,0.5,0.5C271,98.4,270.7,98.6,270.5,98.6z M272.8,98.7
		c-0.1,0-0.3-0.1-0.4-0.1h-0.7c0.1-0.2,0.1-0.3,0.1-0.5s0-0.4-0.1-0.5h0.7c0.1,0,0.3,0,0.4-0.1V98.7z M272.8,78.9
		c-0.1,0-0.3-0.1-0.4-0.1h-0.6v-1h0.6c0.1,0,0.3,0,0.4-0.1V78.9z M275.4,77.7c0.1,0,0.3,0.1,0.4,0.1h0.2c0.1,0,0.3,0,0.4-0.1v1.1
		c-0.1,0-0.3-0.1-0.4-0.1h-0.2c-0.1,0-0.3,0-0.4,0.1V77.7z M275.4,80c0-0.2,0.2-0.4,0.4-0.4h0.2c0.2,0,0.4,0.2,0.4,0.4v16.4
		c0,0.2-0.2,0.4-0.4,0.4h-0.2c-0.2,0-0.4-0.2-0.4-0.4V80z M275.4,97.6c0.1,0,0.3,0.1,0.4,0.1h0.2c0.1,0,0.3,0,0.4-0.1v1.1
		c-0.1,0-0.3-0.1-0.4-0.1h-0.2c-0.1,0-0.3,0-0.4,0.1V97.6z M273.6,76.5c0-0.1,0-0.5,0.5-0.5s0.5,0.4,0.5,0.5v23.4
		c0,0.2,0,0.5-0.5,0.5c-0.4,0-0.5-0.4-0.5-0.5V76.5z M274.6,103.5c0,0.1,0,0.5-0.5,0.5c-0.4,0-0.5-0.4-0.5-0.5v-2.4
		c0.2,0.1,0.3,0.1,0.5,0.1c0.9,0,1.3-0.8,1.3-1.3v-0.1c0-0.2,0.2-0.4,0.4-0.4h0.2c0.2,0,0.4,0.2,0.4,0.4v0.1c0,0.2,0,0.5,0.2,0.7
		C275,101.1,274.6,102.6,274.6,103.5z M278.2,99.9c0,0.1,0,0.5-0.5,0.5c-0.4,0-0.5-0.4-0.5-0.5V76.5c0-0.1,0-0.5,0.5-0.5
		s0.5,0.4,0.5,0.5V99.9z M279,77.7L279,77.7c0.1,0,0.3,0.1,0.4,0.1h0.2c0.1,0,0.3,0,0.4-0.1v1.1c-0.1,0-0.3-0.1-0.4-0.1h-0.2
		c-0.2,0-0.3,0-0.4,0.1l0,0V77.7z M280,80v16.4c0,0.2-0.2,0.4-0.4,0.4h-0.2c-0.2,0-0.4-0.2-0.4-0.4V79.9c0-0.2,0.2-0.4,0.4-0.4h0.2
		C279.8,79.6,280,79.8,280,80z M279,97.6L279,97.6c0.1,0,0.3,0.1,0.4,0.1h0.2c0.1,0,0.3,0,0.4-0.1v1.1c-0.1,0-0.3-0.1-0.4-0.1h-0.2
		c-0.2,0-0.3,0-0.4,0.1l0,0V97.6z M278.9,100.4c0.1-0.2,0.1-0.4,0.1-0.5v-0.2c0-0.2,0.2-0.4,0.4-0.4h0.2c0.2,0,0.4,0.2,0.4,0.4v0.1
		c0,0.2,0,0.3,0.1,0.5L278.9,100.4L278.9,100.4z M281.8,99.9c0,0.2-0.1,0.5-0.5,0.5s-0.5-0.4-0.5-0.5V76.5c0-0.1,0-0.5,0.5-0.5
		c0.4,0,0.5,0.4,0.5,0.5V99.9z M282.6,77.7c0.1,0,0.2,0.1,0.4,0.1h0.2c0.1,0,0.3,0,0.4-0.1v1.1c-0.1,0-0.3-0.1-0.4-0.1H283
		c-0.1,0-0.3,0-0.4,0.1V77.7L282.6,77.7z M282.6,80c0-0.2,0.2-0.4,0.4-0.4h0.2c0.2,0,0.4,0.2,0.4,0.4v16.4c0,0.2-0.2,0.4-0.4,0.4
		H283c-0.2,0-0.4-0.2-0.4-0.4V80L282.6,80z M282.6,97.6c0.1,0,0.2,0.1,0.4,0.1h0.2c0.1,0,0.3,0,0.4-0.1v1.1c-0.1,0-0.3-0.1-0.4-0.1
		H283c-0.1,0-0.3,0-0.4,0.1V97.6L282.6,97.6z M282.5,100.4c0.1-0.2,0.1-0.4,0.1-0.5v-0.1c0-0.2,0.2-0.4,0.4-0.4h0.2
		c0.2,0,0.4,0.2,0.4,0.4v0.1c0,0.2,0,0.3,0.1,0.5H282.5z M285.4,99.9c0,0.2,0,0.5-0.5,0.5c-0.4,0-0.5-0.4-0.5-0.5V76.5
		c0-0.1,0-0.5,0.5-0.5s0.5,0.4,0.5,0.5V99.9z M286.2,77.7c0.1,0,0.3,0.1,0.4,0.1h0.2c0.2,0,0.3,0,0.4-0.1v1.1
		c-0.1,0-0.2-0.1-0.4-0.1h-0.2c-0.1,0-0.3,0-0.4,0.1V77.7z M286.2,80c0-0.2,0.2-0.4,0.4-0.4h0.2c0.2,0,0.4,0.2,0.4,0.4v16.4
		c0,0.2-0.2,0.4-0.4,0.4h-0.2c-0.2,0-0.4-0.2-0.4-0.4V80z M286.2,97.6c0.1,0,0.3,0.1,0.4,0.1h0.2c0.2,0,0.3,0,0.4-0.1v1.1
		c-0.1,0-0.2-0.1-0.4-0.1h-0.2c-0.1,0-0.3,0-0.4,0.1V97.6z M286.1,100.4c0.1-0.2,0.1-0.4,0.1-0.5v-0.1c0-0.2,0.2-0.4,0.4-0.4h0.2
		c0.2,0,0.4,0.2,0.4,0.4v0.1c0,0.2,0,0.3,0.1,0.5H286.1z M289,99.9c0,0.2-0.1,0.5-0.5,0.5s-0.5-0.4-0.5-0.5V76.5
		c0-0.1,0-0.5,0.5-0.5c0.4,0,0.5,0.4,0.5,0.5V99.9z M289.8,77.7c0.1,0,0.3,0.1,0.4,0.1h0.2c0.2,0,0.3,0,0.4-0.1v1.1
		c-0.1,0-0.3-0.1-0.4-0.1h-0.2c-0.2,0-0.3,0-0.4,0.1V77.7z M289.8,80c0-0.2,0.2-0.4,0.4-0.4h0.2c0.2,0,0.4,0.2,0.4,0.4v16.4
		c0,0.2-0.2,0.4-0.4,0.4h-0.2c-0.2,0-0.4-0.2-0.4-0.4V80z M289.8,97.6c0.1,0,0.3,0.1,0.4,0.1h0.2c0.2,0,0.3,0,0.4-0.1v1.1
		c-0.1,0-0.3-0.1-0.4-0.1h-0.2c-0.2,0-0.3,0-0.4,0.1V97.6z M289.7,100.4c0.1-0.2,0.1-0.4,0.1-0.5v-0.1c0-0.2,0.2-0.4,0.4-0.4h0.2
		c0.2,0,0.4,0.2,0.4,0.4v0.1c0,0.2,0,0.3,0.1,0.5H289.7z M292.6,99.9c0,0.1,0,0.5-0.5,0.5l0,0c-0.5,0-0.5-0.4-0.5-0.5V76.5
		c0-0.2,0-0.5,0.5-0.5c0.4,0,0.5,0.4,0.5,0.5V99.9L292.6,99.9z M293.4,77.7c0.1,0,0.3,0.1,0.4,0.1h0.2c0.2,0,0.3,0,0.4-0.1v1.1
		c-0.1,0-0.3-0.1-0.4-0.1h-0.2c-0.2,0-0.3,0-0.4,0.1V77.7z M293.4,80c0-0.2,0.2-0.4,0.4-0.4h0.2c0.2,0,0.4,0.2,0.4,0.4v16.4
		c0,0.2-0.2,0.4-0.4,0.4h-0.2c-0.2,0-0.4-0.2-0.4-0.4V80z M293.4,97.6c0.1,0,0.3,0.1,0.4,0.1h0.2c0.2,0,0.3,0,0.4-0.1v1.1
		c-0.1,0-0.3-0.1-0.4-0.1h-0.2c-0.2,0-0.3,0-0.4,0.1V97.6z M296.3,103.5c0,0.2-0.1,0.5-0.5,0.5s-0.5-0.4-0.5-0.5
		c0-0.9-0.4-2.4-2-2.9c0.1-0.2,0.2-0.5,0.2-0.7v-0.1c0-0.2,0.2-0.4,0.4-0.4h0.2c0.2,0,0.4,0.2,0.4,0.4v0.1c0,0.5,0.4,1.3,1.3,1.3
		c0.2,0,0.4,0,0.5-0.1V103.5z M296.3,99.9c0,0.1,0,0.5-0.5,0.5s-0.5-0.4-0.5-0.5V76.5c0-0.2,0.1-0.5,0.5-0.5s0.5,0.4,0.5,0.5V99.9z
		 M297.6,98.6h-0.1c-0.2,0-0.3,0-0.4,0.1v-1.1c0.1,0,0.3,0.1,0.4,0.1h0.1c0.3,0,0.5,0.2,0.5,0.5S297.8,98.6,297.6,98.6z" />
  <path class="st0" d="M278.2,96.5v3.4l0,0V96.5L278.2,96.5z" />
  <path class="st0" d="M273.4,100.8" />
  <path class="st0" d="M269.2,97.8c0,0.1,0,0.2,0,0.3s0,0.2,0,0.3c0-0.1,0-0.2,0-0.3S269.2,97.9,269.2,97.8z" />
</g>
<g id="plant">
  <polygon class="st0" points="105.9,90.5 92.2,90.5 93.9,103.8 103.8,103.8 	" />
  <g>
    <path class="st0" d="M98.4,90.9c-0.1,0-0.2-0.1-0.2-0.2S97.7,80,96.5,74.5c0-0.1,0.1-0.3,0.2-0.3s0.3,0.1,0.3,0.2
			c1.3,5.6,1.8,16.2,1.8,16.3C98.6,90.7,98.5,90.9,98.4,90.9L98.4,90.9z" />
  </g>
  <g>
    <path class="st0" d="M99.7,90.9c-0.1,0-0.2-0.1-0.2-0.2s-0.1-8.2,2.4-14.5c0.1-0.1,0.2-0.2,0.3-0.1c0.1,0.1,0.2,0.2,0.1,0.3
			c-2.5,6.1-2.4,14.2-2.4,14.3C99.9,90.8,99.8,90.9,99.7,90.9L99.7,90.9z" />
  </g>
  <g>
    <path class="st0" d="M97.6,90.8c-0.1,0-0.2-0.1-0.2-0.2s-1.1-9.9-5-14.1c-0.1-0.1-0.1-0.3,0-0.3c0.1-0.1,0.3-0.1,0.3,0
			c4,4.3,5.1,14,5.1,14.4C97.9,90.7,97.8,90.8,97.6,90.8C97.7,90.8,97.6,90.8,97.6,90.8z" />
  </g>
  <g>
    <path class="st0" d="M99,90.9c-0.1,0-0.2-0.1-0.2-0.2c0-0.4-0.7-10.5,0.6-15.5c0-0.1,0.2-0.2,0.3-0.2c0.1,0,0.2,0.2,0.2,0.3
			c-1.3,4.9-0.6,15.2-0.6,15.3C99.3,90.7,99.2,90.9,99,90.9C99.1,90.9,99,90.9,99,90.9z" />
  </g>
  <g>
    <path class="st0" d="M100.3,90.9c-0.1,0-0.2-0.1-0.2-0.2s-0.2-6.4,4.8-10.2c0.1-0.1,0.3-0.1,0.3,0s0.1,0.3,0,0.3
			c-4.8,3.6-4.6,9.7-4.6,9.7C100.6,90.7,100.5,90.9,100.3,90.9L100.3,90.9z" />
  </g>
  <g>
    <path class="st0" d="M90.1,78.8c-0.2,0-0.3,0-0.3-0.1l-2.5-0.8c-0.1,0-0.2-0.1-0.2-0.3c0-0.1,0.1-0.2,0.2-0.2
			c0.4,0,1.5-0.3,1.8-0.9v-0.1c0,0-0.1,0-0.2,0c-0.6,0-1.7,0.4-2.3,0.9c-0.1,0.1-0.2,0.1-0.3,0c-0.2-0.1-1.8-0.7-2.3-1.5
			c0-0.1,0-0.2,0-0.2s0.1-0.1,0.2-0.1c0.8,0,1.7-0.2,1.8-0.5c0,0,0-0.1,0-0.2s-0.1-0.2-0.5-0.2c-0.7,0-1.8,0.6-1.8,0.6
			c-0.1,0-0.2,0-0.2,0c-0.1-0.1-2.2-1.3-2.3-2.8v-0.1v-0.1c0,0,0-0.1,0.1-0.1c1.1-0.9,4.1-1,4.2-1s0.2,0.1,0.2,0.2
			c0.1,0.4,0.6,1.6,1.2,1.4c0.1,0,0.1-0.1,0.1-0.1c0-0.1-0.4-0.7-0.8-1c-0.1-0.1-0.1-0.2-0.1-0.2c0-0.1,0.1-0.2,0.2-0.2
			c0.9-0.1,2.5,0.7,2.6,0.7S89,72,89,72.1c0.1,0.7,0.6,2,0.9,2.1c0,0,0.1,0,0.2-0.2c0.3-0.6-0.2-1.6-0.4-1.9c-0.1-0.1-0.1-0.2,0-0.3
			c0.1-0.1,0.2-0.1,0.3,0l2.3,1.4c0.2,0.1,0.9,0.4,0.8,2c0,0.9-0.3,1.3-0.4,1.5s-0.2,0.8-0.9,1.3C90.9,78.7,90.4,78.8,90.1,78.8z
			 M90,78.3c0,0,0.5,0.2,1.5-0.7c0.6-0.5,0.7-1,0.7-1.1s0-0.1,0.1-0.1l0,0c0,0,0.3-0.3,0.3-1.2c0.1-1.4-0.5-1.6-0.5-1.6s0,0-0.1,0
			l-1.6-0.9c0.2,0.5,0.3,1.1,0.1,1.7c-0.3,0.5-0.7,0.6-1,0.3c-0.4-0.4-0.8-1.7-0.9-2.1c-0.3-0.1-1-0.5-1.6-0.6
			c0.3,0.3,0.6,0.7,0.5,1.1c0,0.1-0.2,0.3-0.5,0.4c-1,0.2-1.5-1.1-1.7-1.6c-0.6,0-2.8,0.2-3.7,0.8c0.1,1,1.6,2,2,2.2
			c0.3-0.2,1.2-0.6,1.9-0.6c0.5,0,0.8,0.2,0.9,0.4c0.2,0.3,0.1,0.5,0,0.6c-0.2,0.4-1.1,0.6-1.7,0.7c0.5,0.4,1.2,0.7,1.6,0.9
			c0.7-0.5,1.8-0.9,2.5-0.9c0.3,0,0.5,0.1,0.6,0.3c0.1,0.1,0.1,0.3,0,0.5c-0.2,0.5-0.8,0.9-1.3,1L90,78.3
			C89.9,78.3,89.9,78.3,90,78.3L90,78.3z" />
  </g>
  <g>
    <path class="st0" d="M101.6,76.5c-0.1,0-0.1,0-0.2,0c-0.9,0-1.6-0.7-1.8-1c-0.3,0-1-0.1-1.8-0.9c-1.6-1.6-1.2-2.8-1.1-2.9l0.8-2.7
			c0-0.1,0.1-0.2,0.2-0.2s0.2,0.1,0.2,0.2c0,0,0.4,1.8,1.4,2.2c0.1,0.1,0.2,0.1,0.3,0.1c0.1-0.4-1.1-2.5-1.6-3.2
			c-0.1-0.1-0.1-0.1,0-0.2c0-0.1,0.8-1.8,1.7-2.3c0.1,0,0.2,0,0.2,0c0.1,0,0.1,0.1,0.1,0.2c0.1,0.9,0.4,2,0.7,2h0.1
			c0.1-0.1,0.2-0.1,0.2-0.2c0.2-0.6-0.5-1.9-0.8-2.3c-0.1-0.1,0-0.2,0-0.3c0.1-0.1,2-2.6,3.7-2.6h0.1h0.1c0,0,0.1,0,0.1,0.1
			c1.2,1.4,1.1,4.6,1.1,4.8c0,0.1-0.1,0.2-0.2,0.2c-0.4,0.1-1.6,0.5-1.9,1.1c-0.1,0.1-0.1,0.3-0.1,0.5c0.1,0.2,0.2,0.2,0.2,0.2
			c0.4,0,1.1-0.6,1.5-1c0.1-0.1,0.1-0.1,0.2-0.1s0.2,0.1,0.2,0.2c0.3,1.1-0.2,3.1-0.2,3.2s-0.1,0.2-0.3,0.2c-0.1,0-0.2,0-0.2,0
			c-1.1,0-2.4,0.6-2.5,1c0,0.1,0.1,0.1,0.1,0.1c0.2,0.1,0.4,0.2,0.7,0.2c0.8,0,1.6-0.5,1.6-0.5c0.1-0.1,0.2-0.1,0.3,0
			c0.1,0.1,0.1,0.2,0.1,0.3l-1,2.8C103.8,75.5,103.4,76.5,101.6,76.5z M99.7,75c0.1,0,0.2,0,0.2,0.1c0,0,0.6,0.9,1.5,0.9
			c1.7,0.1,2-0.7,2-0.7l0.8-2.2c-0.3,0.1-0.8,0.3-1.3,0.3c-0.3,0-0.6-0.1-0.9-0.2c-0.4-0.2-0.4-0.6-0.4-0.7c0.2-0.7,1.9-1.4,3-1.3
			c0.1-0.4,0.3-1.5,0.3-2.3c-0.4,0.4-1,0.9-1.5,0.9c-0.2,0-0.5-0.1-0.7-0.6c-0.1-0.3-0.1-0.6,0.1-0.8c0.4-0.7,1.6-1.1,2-1.2
			c0-0.7-0.1-3.1-1-4.2c-1.2,0.1-2.7,1.8-3.1,2.3c0.3,0.4,1,1.7,0.7,2.5c-0.1,0.2-0.2,0.4-0.4,0.6c-0.1,0.1-0.2,0.1-0.4,0.1
			c-0.7,0-1-1.3-1.1-2c-0.4,0.5-0.9,1.3-1.1,1.7c0.4,0.6,1.8,2.8,1.6,3.5c-0.1,0.3-0.4,0.4-0.9,0.1c-0.7-0.3-1.2-1.2-1.4-1.8l-0.6,2
			c0,0-0.3,1.1,1,2.4c0.7,0.6,1.2,0.7,1.4,0.7C99.6,75,99.6,75,99.7,75C99.6,75,99.6,75,99.7,75z" />
  </g>
  <g>
    <path class="st0" d="M99.7,75.4C99.6,75.4,99.6,75.4,99.7,75.4c-0.2-0.1-0.3-0.2-0.2-0.3l4.2-12.6c0-0.1,0.2-0.2,0.3-0.2
			c0.1,0,0.2,0.2,0.2,0.3L100,75.2C99.9,75.4,99.8,75.4,99.7,75.4z" />
  </g>
  <g>
    <path class="st0" d="M105.4,83.2c-0.3,0-0.7-0.1-1.1-0.3c-0.6-0.3-0.8-0.7-0.9-0.8c-0.1-0.1-0.4-0.4-0.5-1.2
			c-0.3-1.3,0.2-1.8,0.4-1.9l1.7-1.8c0.1-0.1,0.2-0.1,0.3,0c0.1,0.1,0.1,0.2,0.1,0.3c-0.1,0.3-0.4,1.3-0.1,1.8c0,0,0,0.1,0.1,0.1
			c0.2-0.3,0.4-1.9,0.4-2.5c0-0.1,0-0.1,0.1-0.2s1.3-1.2,2.1-1.4c0.1,0,0.2,0,0.2,0.1c0.1,0.1,0.1,0.2,0,0.3
			c-0.4,0.7-0.6,1.5-0.5,1.6c0.5-0.1,0.8-1.3,0.8-2.1c0-0.1,0.1-0.2,0.1-0.2c0.1,0,1.8-0.8,3-0.8c0.3,0,0.5,0,0.6,0.1
			c0,0,0.1,0,0.1,0.1l0,0v0.1c0.1,1.2-1.3,3.6-1.4,3.7s-0.2,0.1-0.3,0.1c0,0-0.4-0.1-0.9-0.1c-0.4,0-1,0.1-1.1,0.4
			c0,0.1,0,0.1,0,0.1l0,0c0,0,0.1,0.1,0.3,0.1c0.5,0,1.2-0.2,1.2-0.2c0.1,0,0.2,0,0.2,0.1c0.1,0.1,0.1,0.2,0.1,0.3
			c-0.3,0.8-1.6,1.9-1.7,1.9c-0.1,0.1-0.2,0.1-0.3,0c-0.2-0.1-0.7-0.2-1.1-0.2c-0.7,0-1,0.2-1,0.2c0.2,0.3,0.6,0.3,0.9,0.3
			s0.6-0.1,0.6-0.1c0.1,0,0.2,0,0.3,0.1c0,0.1,0,0.2-0.1,0.3l-2,1.4C106,83,105.8,83.2,105.4,83.2z M103.5,79.3c0,0-0.4,0.3-0.2,1.5
			c0.2,0.7,0.4,0.9,0.4,0.9c0.1,0,0.1,0.1,0.1,0.1s0.1,0.4,0.7,0.6c0.3,0.1,0.6,0.2,0.9,0.2s0.4-0.1,0.4-0.1l1.3-1
			c-0.5,0-0.9-0.2-1.1-0.5c-0.2-0.2-0.1-0.4,0-0.5c0.2-0.5,1.2-0.5,1.5-0.5c0.5,0,0.9,0.1,1.2,0.2c0.3-0.3,0.8-0.7,1.1-1.1
			c-0.2,0-0.5,0.1-0.7,0.1c-0.3,0-0.6-0.1-0.7-0.3c-0.1-0.1-0.1-0.3,0-0.5c0.1-0.3,0.5-0.8,1.5-0.8c0.3,0,0.6,0,0.8,0.1
			c0.4-0.7,1.2-2.3,1.3-3.2c-0.1,0-0.2,0-0.3,0c-0.9,0-2.2,0.5-2.7,0.7c0,0.6-0.2,2.2-1.1,2.4h-0.1l0,0c-0.2,0-0.3-0.1-0.4-0.2
			c-0.2-0.3,0-1,0.2-1.5c-0.5,0.3-1,0.7-1.2,1c0,0.5-0.1,2.2-0.5,2.7c-0.1,0.2-0.3,0.2-0.4,0.2c-0.2,0-0.3-0.1-0.4-0.3
			c-0.3-0.3-0.3-0.8-0.2-1.3L103.5,79.3L103.5,79.3L103.5,79.3z" />
  </g>
  <g>
    <path class="st0" d="M103.6,82.2c-0.1,0-0.1,0-0.2-0.1s-0.1-0.3,0-0.3l8.5-7.5c0.1-0.1,0.3-0.1,0.3,0c0.1,0.1,0.1,0.3,0,0.3
			l-8.5,7.5C103.7,82.2,103.6,82.2,103.6,82.2z" />
  </g>
  <g>
    <path class="st0" d="M92.6,76.6L92.6,76.6c-3.2-1.6-11.3-3.8-11.4-3.8S81,72.6,81,72.5c0-0.1,0.2-0.2,0.3-0.2
			c0.3,0.1,8.2,2.2,11.4,3.8c0.1,0.1,0.2,0.2,0.1,0.3C92.8,76.5,92.7,76.6,92.6,76.6z" />
  </g>
  <g>
    <path class="st0" d="M104.1,104H93.7c-0.1,0-0.2-0.1-0.2-0.2L92,90.7c0-0.1,0-0.1,0.1-0.2c0-0.1,0.1-0.1,0.2-0.1H106
			c0.1,0,0.1,0,0.2,0.1c0,0.1,0.1,0.1,0.1,0.2l-1.8,13.1C104.3,103.9,104.2,104,104.1,104z M93.9,103.5h10l1.7-12.7H92.5L93.9,103.5
			z" />
  </g>
  <g>
    <path class="st0" d="M94.6,75.3c-1,0-1.3-0.3-1.4-0.5l-1.8-2c-0.1-0.1-0.1-0.2,0-0.3s0.2-0.1,0.3-0.1c0,0,0.7,0.3,1.3,0.3
			c0.3,0,0.5-0.1,0.7-0.2c0.1,0,0.1-0.1,0.1-0.1c-0.1-0.2-1.1-0.6-2.1-0.6c-0.2,0-0.4,0-0.5,0s-0.2,0-0.2-0.1
			c-0.1-0.2-1.2-1.5-1.2-2.4c0-0.1,0-0.2,0.1-0.2s0.2,0,0.2,0c0.3,0.2,1.1,0.6,1.6,0.6c0.2,0,0.2-0.1,0.2-0.2c0-0.6-1.5-0.8-2.2-0.8
			c-0.1,0-0.2-0.1-0.2-0.2s-0.7-3-0.1-4.3c0,0,0-0.1,0.1-0.1h0.1h0.1c1.4-0.2,3.9,1.5,4,1.6s0.1,0.2,0.1,0.3c-0.2,0.7-0.6,2.1,0,2.4
			c0.1,0,0.1,0,0.2,0c0.2-0.3,0.2-1.2,0.1-1.8c0-0.1,0-0.2,0.1-0.2c0.1-0.1,0.2-0.1,0.2,0c0.9,0.3,1.8,1.9,1.9,2c0,0.1,0,0.2,0,0.3
			c-0.2,0.6-0.7,2.4-0.5,2.7c0,0,0.1,0,0.2-0.1c0.6-0.4,0.6-1.5,0.6-1.9c0-0.1,0.1-0.2,0.2-0.2s0.2,0,0.3,0.1l0.5,1
			c0,0.1,0,0.1,0,0.2c0,0-0.1,0.2-0.2,0.6c0,0.2-0.1,0.4-0.1,0.5s-0.1,0.2-0.1,0.3C97,72,97,72.3,97,72.5c0,0.1,0.1,0.3,0.2,0.5
			c0.2,0.3,0.3,0.5,0.3,0.6c0.1,0.1,0.1,0.2,0,0.4c-0.4,0.5-0.7,0.6-0.8,0.7c-0.1,0.1-0.6,0.5-1.4,0.6
			C95.1,75.3,94.8,75.3,94.6,75.3z M93.6,74.6c0,0,0.2,0.2,0.9,0.2c0.2,0,0.4,0,0.7-0.1c0.8-0.1,1.1-0.5,1.2-0.5l0.1-0.1l0,0
			c0,0,0.2-0.1,0.5-0.4c-0.1-0.1-0.2-0.3-0.3-0.6c-0.1-0.2-0.2-0.5-0.2-0.6c0-0.3,0-0.6,0.1-1c0-0.1,0.1-0.2,0.1-0.4
			c0-0.1,0.1-0.3,0.1-0.5c0.1-0.3,0.1-0.5,0.2-0.6h-0.1c-0.1,0.5-0.3,1.1-0.8,1.5c-0.4,0.3-0.7,0.2-0.9-0.1c-0.3-0.6,0.3-2.5,0.5-3
			C95.5,68,95,67.3,94.5,67c0,0.5,0,1.3-0.3,1.7c-0.2,0.2-0.4,0.3-0.7,0.2c-1-0.4-0.5-2.2-0.4-2.8c-0.5-0.3-2.3-1.5-3.4-1.4
			c-0.4,0.9-0.1,2.8,0.1,3.7c0.6,0,2.5,0.2,2.5,1.3c0,0.4-0.3,0.7-0.7,0.7l0,0c-0.4,0-1-0.2-1.4-0.4c0.2,0.6,0.6,1.2,0.9,1.6
			c0.1,0,0.3,0,0.5,0c0.9,0,2.4,0.4,2.6,0.9c0,0.1,0.1,0.4-0.2,0.6c-0.3,0.2-0.6,0.3-1,0.3c-0.2,0-0.4,0-0.6-0.1L93.6,74.6
			C93.6,74.5,93.6,74.5,93.6,74.6L93.6,74.6z" />
  </g>
  <g>
    <path class="st0" d="M96.6,74.6c-0.1,0-0.2,0-0.2-0.1c-1.4-2.8-6.8-9.9-6.9-10s-0.1-0.3,0-0.3c0.1-0.1,0.3-0.1,0.3,0
			c0.2,0.3,5.5,7.3,6.9,10.1C96.8,74.4,96.7,74.6,96.6,74.6C96.7,74.6,96.6,74.6,96.6,74.6z" />
  </g>
  <g>
    <path class="st0" d="M104.7,76.8c-0.3,0-0.8-0.1-1.5-1.1c-0.1-0.1-0.1-0.2,0-0.3c0,0,0.1-0.2,0.2-0.5l0.3-0.7c0,0,0.3-0.7,0.5-1.2
			c-0.1,0-0.1,0.1-0.2,0.1s-0.4,0.1-0.5,0.2c-0.1,0-0.2,0-0.3-0.1c-0.1-0.1-0.1-0.2,0-0.3c0.7-1.3,1.3-1.5,1.4-1.5l2.6-0.7
			c0.1,0,0.2,0,0.3,0.1c0.1,0.1,0,0.2-0.1,0.3c-0.3,0.2-1.2,1-1.2,1.6c0,0.1,0,0.1,0,0.1c0.4-0.1,1.5-1.5,1.9-2.1
			c0-0.1,0.1-0.1,0.2-0.1s1.8,0.2,2.6,0.5c0.1,0,0.2,0.1,0.2,0.2s-0.1,0.2-0.2,0.2c-0.6,0.2-1.2,0.5-1.3,0.7l0,0c0.1,0,0.1,0,0.2,0
			c0.6,0,1.4-0.7,1.7-1c0.1-0.1,0.1-0.1,0.2-0.1c0.3,0.1,2.9,0.8,3.6,1.7v0.1V73v0.1c-0.5,0.9-2.2,1.5-3.2,1.7H112l0,0
			c-0.1,0-0.2,0-0.3-0.1c-0.1-0.1-0.1-0.2-0.1-0.3c-0.1,0-0.2,0-0.3,0h-0.2c-0.2,0-0.3,0-0.3-0.1c-0.6-0.4-1-0.5-1.3-0.3
			c-0.1,0.1-0.1,0.1-0.1,0.1s0,0,0.1,0s0.2,0.1,0.2,0.2c0,0.2-0.1,0.2-0.5,0.3c-0.2,0.1-0.6,0.2-0.6,0.2s0,0.3,0,0.6c0,0,0,0,0,0.1
			s-0.1,0.2-0.2,0.2l0,0c-0.1,0-0.2,0-0.2-0.1c0,0-0.2-0.2-0.3-0.2c-0.1-0.1-0.1-0.1-0.2-0.1s-0.1-0.1-0.2-0.1s-0.1-0.1-0.2-0.2
			c-0.3-0.2-0.6-0.4-0.9-0.4c-0.2,0-0.2,0.1-0.2,0.1c0,0.3,0.3,0.6,0.6,0.7c0.1,0,0.1,0.1,0.1,0.2s0,0.1-0.1,0.2
			c0,0-0.2,0.2-0.3,0.3c-0.1,0.1-0.3,0.2-0.3,0.2h-0.1H106l-1.2,0.1C104.8,76.8,104.8,76.8,104.7,76.8z M103.8,75.6
			c0.6,0.8,1,0.7,1,0.7l1.3-0.1c0,0,0.2-0.1,0.3-0.2l0,0c-0.3-0.3-0.5-0.6-0.5-1s0.3-0.6,0.7-0.6c0.4,0,0.8,0.2,1.2,0.5
			c0.1,0.1,0.1,0.1,0.2,0.1s0.1,0.1,0.2,0.1s0.1,0.1,0.2,0.1l0,0c0-0.2,0.1-0.4,0.1-0.5c0.1-0.1,0.3-0.2,0.8-0.3c0,0,0,0,0-0.1
			c-0.1-0.2,0-0.5,0.3-0.6c0.4-0.4,1.1-0.3,1.8,0.2c0,0,0,0,0.1,0h0.2c0.4,0,0.6,0.1,0.6,0.1c0.1,0,0.2,0.2,0.1,0.3l0,0
			c1.3-0.3,2.3-0.8,2.6-1.3c-0.6-0.6-2.3-1.2-3.1-1.4c-0.3,0.3-1.2,1-2,1c-0.1,0-0.3,0-0.4-0.1c-0.3-0.1-0.3-0.3-0.3-0.4
			c0-0.3,0.5-0.6,1-0.9c-0.6-0.1-1.3-0.2-1.6-0.3c-0.4,0.5-1.6,2.2-2.2,2.2c-0.1,0-0.4-0.1-0.5-0.6c0-0.5,0.3-0.9,0.6-1.3l-1.6,0.5
			c0,0-0.3,0.1-0.7,0.7c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.1,0.3-0.1c0.1,0,0.2,0,0.2,0.1s0.1,0.2,0,0.2
			c-0.1,0.5-0.6,1.7-0.6,1.8l-0.3,0.7C103.9,75.3,103.8,75.5,103.8,75.6z" />
  </g>
  <g>
    <path class="st0" d="M104.1,74.3c-0.1,0-0.2-0.1-0.2-0.2s0.1-0.3,0.2-0.3s5.3-1.1,11.2-0.9c0.1,0,0.2,0.1,0.2,0.2
			s-0.1,0.2-0.2,0.2C109.4,73.3,104.2,74.3,104.1,74.3L104.1,74.3z" />
  </g>
</g>
<g id="box">
  <path class="st0" d="M17.8,88.7H3c-0.3,0-0.5,0.2-0.5,0.5v2.1c0,0.3,0.2,0.5,0.5,0.5h0.7v10.5h13.4V91.9h0.7c0.3,0,0.5-0.2,0.5-0.5
		v-2.1C18.3,89,18.1,88.7,17.8,88.7z M4,100.4c0.9,0.1,1.6,0.8,1.7,1.7H4V100.4z M15,102.1c0.1-0.9,0.8-1.6,1.7-1.7v1.7H15z
		 M16.7,100c-1.1,0.1-2,1-2.1,2.1H6.1c-0.1-1.1-1-2-2.1-2.1v-8.1h12.7V100z M18,91.4c0,0.1-0.1,0.2-0.2,0.2H3
		c-0.1,0-0.2-0.1-0.2-0.2v-2.1c0-0.1,0.1-0.2,0.2-0.2h14.8c0.1,0,0.2,0.1,0.2,0.2V91.4z" />
  <path class="st0" d="M8.7,95.1H12c0.5,0,0.9-0.4,0.9-0.9s-0.4-0.9-0.9-0.9H8.7c-0.5,0-0.9,0.4-0.9,0.9S8.2,95.1,8.7,95.1z
		 M8.7,93.7H12c0.3,0,0.5,0.2,0.5,0.5s-0.2,0.5-0.5,0.5H8.7c-0.3,0-0.5-0.2-0.5-0.5S8.4,93.7,8.7,93.7z" />
  <path class="st0" d="M17.1,89.5h-4.5v0.4h4.5c0.1,0,0.2,0.1,0.2,0.2v0.7h0.3v-0.7C17.6,89.7,17.4,89.5,17.1,89.5z" />
  <rect x="11.5" y="89.5" class="st0" width="0.5" height="0.4" />
</g>
<g id="abacus">



  <svg x="135" y="48" version="1.0" xmlns="http://www.w3.org/2000/svg"
       width="15.000000pt" height="15.000000pt" viewBox="0 0 458.000000 458.000000"
       preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,458.000000) scale(0.100000,-0.100000)"
   fill="#000000" stroke="none">
<path class="st0" d="M1903 4286 c-29 -14 -53 -29 -53 -33 0 -4 -3 -18 -6 -29 -4 -14 3
-30 20 -49 27 -30 36 -14 11 19 -30 39 27 76 118 76 59 0 97 -43 97 -107 0
-125 -79 -229 -205 -272 -174 -60 -216 -110 -217 -260 -1 -165 50 -236 198
-270 65 -15 118 -59 150 -124 54 -105 28 -188 -91 -293 -36 -32 -63 -60 -60
-62 11 -11 146 90 173 130 63 92 66 169 8 273 -38 69 -77 99 -155 121 -145 39
-180 81 -188 229 -8 137 32 186 191 237 131 41 213 123 236 232 15 72 4 122
-35 164 -27 30 -39 36 -86 39 -42 3 -65 -1 -106 -21z"/>
  <path class="st0" d="M2315 3705 c-87 -43 -111 -100 -76 -180 14 -31 58 -83 139 -163 123
-121 152 -165 152 -226 0 -57 -22 -96 -92 -162 -44 -42 -68 -74 -76 -101 -20
-66 -15 -188 13 -301 14 -57 25 -107 25 -113 0 -5 -224 -9 -575 -9 -511 0
-575 -2 -575 -15 0 -32 102 -614 126 -725 57 -252 145 -426 279 -548 l57 -52
473 0 474 0 66 61 c149 140 227 310 289 634 30 156 106 607 106 629 0 14 -41
16 -352 18 l-353 3 -12 135 c-11 125 -10 179 4 255 3 18 30 55 69 95 71 74 84
100 84 172 0 73 -23 113 -150 263 -61 72 -120 149 -131 173 -19 37 -20 47 -8
74 7 17 34 46 61 65 70 51 64 58 -17 18z"/>
  <path class="st0" d="M3295 2393 c-70 -19 -125 -46 -125 -61 0 -9 -7 -56 -17 -104 -9 -49
-14 -91 -11 -94 4 -3 24 6 46 21 52 34 127 62 190 71 141 18 255 -95 239 -238
-19 -161 -206 -318 -534 -448 -67 -26 -82 -36 -88 -58 -5 -21 -48 -117 -83
-185 -6 -11 200 65 316 117 250 113 400 221 484 351 143 220 83 498 -130 602
-50 24 -70 28 -162 30 -58 1 -114 -1 -125 -4z"/>
  <path class="st0" d="M660 998 c115 -55 409 -151 559 -182 l121 -26 876 0 875 0 110 25
c201 45 521 152 626 209 25 14 -137 15 -1612 15 l-1640 -1 85 -40z"/>
  <path class="st0" d="M1380 713 c0 -5 22 -39 48 -78 l47 -70 736 -3 736 -2 51 80 51 80
-834 0 c-459 0 -835 -3 -835 -7z"/>
</g>
</svg>






</g>
<g id="phone">
  <path class="st0" d="M218.1,55.2v-2.7c0-0.1-0.1-0.2-0.2-0.2c-0.1,0-0.2,0.1-0.2,0.2v2.7h-0.4v2l0.7,2.2v4l-0.7,1.3v0.7h1.4V55.2
		H218.1z" />
  <path class="st0" d="M217.9,59.4l-0.7-2.2v-2h-2.9v2l0.7,2.2v4l-0.7,1.3v0.7h2.9v-0.8l0.7-1.3V59.4z M216.1,55.9
		C216.1,55.9,216.2,56,216.1,55.9c0.1,0.1,0,0.2,0,0.2C216.1,56.1,216,56.1,216.1,55.9C216,56,216,55.9,216.1,55.9z M216.1,56.3
		C216.1,56.3,216.2,56.3,216.1,56.3c0.1,0.1,0,0.2,0,0.2C216.1,56.5,216,56.4,216.1,56.3C216,56.3,216,56.3,216.1,56.3z M216.1,56.7
		C216.1,56.7,216.2,56.7,216.1,56.7c0.1,0.1,0,0.2,0,0.2C216.1,56.8,216,56.8,216.1,56.7C216,56.7,216,56.7,216.1,56.7z M215.7,55.9
		C215.8,55.9,215.8,56,215.7,55.9c0.1,0.1,0,0.2,0,0.2S215.7,56.1,215.7,55.9C215.6,56,215.7,55.9,215.7,55.9z M215.7,56.3
		C215.8,56.3,215.8,56.3,215.7,56.3c0.1,0.1,0,0.2,0,0.2S215.7,56.4,215.7,56.3C215.6,56.3,215.7,56.3,215.7,56.3z M215.7,56.7
		C215.8,56.7,215.8,56.7,215.7,56.7c0.1,0.1,0,0.2,0,0.2S215.7,56.8,215.7,56.7C215.6,56.7,215.7,56.7,215.7,56.7z M215.4,55.9
		C215.4,55.9,215.5,56,215.4,55.9c0.1,0.1,0,0.2,0,0.2S215.3,56.1,215.4,55.9C215.3,56,215.3,55.9,215.4,55.9z M215.4,56.3
		C215.4,56.3,215.5,56.3,215.4,56.3c0.1,0.1,0,0.2,0,0.2S215.3,56.4,215.4,56.3C215.3,56.3,215.3,56.3,215.4,56.3z M215.4,56.7
		C215.4,56.7,215.5,56.7,215.4,56.7c0.1,0.1,0,0.2,0,0.2S215.3,56.8,215.4,56.7C215.3,56.7,215.3,56.7,215.4,56.7z M214.8,57.8h2.2
		l0.4,1.1h-2.2L214.8,57.8z M215.5,62.2v-0.4h0.5v0.4H215.5z M216,62.8v0.4h-0.5v-0.4H216z M215.5,61.5v-0.4h0.5v0.4H215.5z
		 M215.5,60.7v-0.4h0.5v0.4H215.5z M215.5,60v-0.4h0.5V60H215.5z M215.9,65.2h-0.4c-0.1,0-0.2-0.1-0.2-0.2s0.1-0.2,0.2-0.2h0.4
		c0.1,0,0.2,0.1,0.2,0.2S216,65.2,215.9,65.2z M216.7,63.1h-0.5v-0.4h0.5V63.1z M216.7,62.2h-0.5v-0.4h0.5V62.2z M216.7,61.5h-0.5
		v-0.4h0.5V61.5z M216.7,60.7h-0.5v-0.4h0.5V60.7z M216.7,60h-0.5v-0.4h0.5V60z M217.4,63.1h-0.5v-0.4h0.5V63.1z M217.4,62.2h-0.5
		v-0.4h0.5V62.2z M217.4,61.5h-0.5v-0.4h0.5V61.5z M217.4,60.7h-0.5v-0.4h0.5V60.7z M217.4,60h-0.5v-0.4h0.5V60z" />
</g>
<g id="tiles">
  <path class="st0" d="M122.3,15c0,0.1,0.1,0.1,0.1,0.1h2.8c0.1,0,0.1-0.1,0.1-0.1v-3.9c0-0.1-0.1-0.1-0.1-0.1h-3.9
		c-0.1,0-0.1,0.1-0.1,0.1v2.8c0,0.1,0.1,0.1,0.1,0.1c0.1,0,0.1-0.1,0.1-0.1v-2.6h3.6v3.6L122.3,15C122.4,14.9,122.3,14.9,122.3,15z" />
  <path class="st0" d="M123.5,11.7v1.1c0,0.1,0.1,0.1,0.1,0.1h1.1c0.1,0,0.1-0.1,0.1-0.1v-1.1c0-0.1-0.1-0.1-0.1-0.1h-1.1
		C123.5,11.6,123.5,11.6,123.5,11.7z M123.7,11.8h0.8v0.8h-0.8V11.8z" />
  <path class="st0" d="M123.2,12.8v-1.1c0-0.1-0.1-0.1-0.1-0.1H122c-0.1,0-0.1,0.1-0.1,0.1v1.1c0,0.1,0.1,0.1,0.1,0.1h1.1
		C123.1,12.9,123.2,12.9,123.2,12.8z M122.9,12.7h-0.8v-0.8h0.8V12.7z" />
  <path class="st0" d="M123.5,13.4v1.1c0,0.1,0.1,0.1,0.1,0.1h1.1c0.1,0,0.1-0.1,0.1-0.1v-1.1c0-0.1-0.1-0.1-0.1-0.1h-1.1
		C123.5,13.2,123.5,13.3,123.5,13.4z M123.7,13.5h0.8v0.8h-0.8V13.5z" />
  <path class="st0" d="M120.4,14.8v1.1c0,0.1,0.1,0.1,0.1,0.1h1.1c0.1,0,0.1-0.1,0.1-0.1v-1.1c0-0.1-0.1-0.1-0.1-0.1h-1.1
		C120.5,14.6,120.4,14.7,120.4,14.8z M120.7,14.9h0.8v0.8h-0.8V14.9z" />
  <circle class="st0" cx="121.9" cy="14.5" r="0.1" />
  <circle class="st0" cx="121.9" cy="13.9" r="0.1" />
  <circle class="st0" cx="121.9" cy="13.4" r="0.1" />
  <circle class="st0" cx="122.5" cy="13.4" r="0.1" />
  <circle class="st0" cx="123" cy="13.4" r="0.1" />
  <circle class="st0" cx="123" cy="13.9" r="0.1" />
  <circle class="st0" cx="123" cy="14.5" r="0.1" />
  <circle class="st0" cx="122.5" cy="14.5" r="0.1" />
</g>
<rect id="flexboxPuzzleBtn" x="2.5" y="88.5" class="st2" width="16" height="14" />
<rect id="mathPuzzleBtn" x="138" y="48" class="st2" width="12" height="20" />



  <rect id="puzzlerBtn" x="118.4" y="10" class="st2" width="8.1" height="8" />
<rect id="pipePuzzleBtn" x="156" y="34.8" class="st2" width="34" height="23.5" />
    <rect id="indiceMap" x="234" y="44" class="st2" width="8" height="8"/>
<!--<rect id="pipePuzzleBtn" x="269" y="75" class="st2" width="30" height="30" />-->
<g id="open-door" class="st3">
  <path class="st0" d="M49.1,53.9c0,1.5,1.2,2.8,2.8,2.8c1.5,0,2.8-1.2,2.8-2.8c0-1.5-1.2-2.8-2.8-2.8C50.3,51.2,49.1,52.4,49.1,53.9
		z M51.2,53.9c0-0.4,0.3-0.6,0.6-0.6c0.4,0,0.6,0.3,0.6,0.6s-0.3,0.6-0.6,0.6C51.5,54.6,51.2,54.3,51.2,53.9z" />
  <path class="st0" d="M0,101.9v2.1h27.4l29.8-8.4V12.3L34.2,6h34.3v98h27.4v-2.1H74.5V0H21.4v101.9H0z M27.4,101.5V6.3L55,13.9V94
		L27.4,101.5z M23.5,101.9V2.1h48.8v99.7h-1.7v-98H26.5l-1.2-0.3v0.3v98C25.3,101.9,23.5,101.9,23.5,101.9z" />
</g>
<g id="fishbooks">
  <path class="st0" d="M249.8,42.7c0.1,0,0.2-0.1,0.2-0.2v-0.7c0-0.1-0.1-0.2-0.2-0.2h-4.9c1.8-0.7,2.9-2.5,2.9-4.4
		c0-1.3-0.5-2.6-1.5-3.5c-0.1-0.1-0.1-0.1-0.2-0.2l-0.1-0.1h-5.9c-0.1,0-0.1,0-0.1,0.1c-2,1.7-2.3,4.7-0.5,6.7
		c0.5,0.6,1.1,1,1.8,1.3h-2.7c-0.8,0-1.4,0.6-1.4,1.4c0,0.4,0.2,0.8,0.4,1h-0.3c-1,0-1.8,0.8-1.8,1.7s0.8,1.8,1.7,1.8v1.3
		c0,0.1,0.1,0.2,0.2,0.2c0.1,0,0.1,0,0.1-0.1l0.5-0.6l0.5,0.6c0.1,0.1,0.2,0.1,0.3,0l0.1-0.1v-1.3h9.2c0.1,0,0.2-0.1,0.2-0.2v-0.7
		c0-0.1-0.1-0.2-0.2-0.2h-0.4V45h0.4c0.1,0,0.2-0.1,0.2-0.2v-0.6h1.5c0.1,0,0.2-0.1,0.2-0.2v-0.7c0-0.1-0.1-0.2-0.2-0.2h-0.2v-0.6
		h0.2V42.7z M240.2,33.8h5.7l0.1,0.1c0.2,0.2,0.4,0.4,0.6,0.6c-0.2,0-0.5,0.1-0.7,0.2c-0.6,0.2-1.2,0.2-1.8,0
		c-0.3-0.1-0.7-0.2-1-0.2c-0.4,0-0.7,0.1-1,0.2c-0.3,0.1-0.6,0.2-0.9,0.2c-0.3,0-0.6-0.1-0.9-0.2c-0.2-0.1-0.5-0.2-0.7-0.2
		C239.7,34.3,239.9,34.1,240.2,33.8z M238.7,37.2c0-0.8,0.2-1.6,0.6-2.2c0.3,0,0.6,0.1,0.8,0.2c0.3,0.1,0.7,0.2,1,0.2
		c0.4,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.2,0.9-0.2c0.3,0,0.6,0.1,0.9,0.2c0.3,0.1,0.7,0.2,1,0.2c0.4,0,0.7-0.1,1-0.2
		c0.3-0.1,0.5-0.2,0.8-0.2c1.2,2.1,0.5,4.8-1.6,6s-4.8,0.5-6-1.6C238.9,38.7,238.7,37.9,238.7,37.2z M248,47.1h-9v-0.4h9V47.1z
		 M247.4,46.4h-8.5V46c0-0.1-0.1-0.2-0.2-0.2h-1.3c-0.1,0-0.2,0.1-0.2,0.2v0.4c-0.4,0-0.6-0.3-0.6-0.7s0.3-0.6,0.7-0.6l0,0h10.1
		V46.4z M248,44.7h-10.7c-0.6,0-1,0.4-1,1s0.4,1,1,1v0.4c-0.8,0-1.4-0.6-1.4-1.4s0.6-1.4,1.4-1.4H248V44.7z M249.6,44h-11.1
		c-0.6,0-1-0.5-1-1c0-0.6,0.5-1,1-1h11.1v0.4h-10.9c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.3,0.6,0.6,0.6h10.9V44z M249.3,43.2h-10.5
		c-0.2,0-0.3-0.1-0.3-0.3s0.1-0.3,0.3-0.3h10.5V43.2z" />
  <path class="st0" d="M245.8,37.5l0.8,0.7c0.1,0.1,0.2,0.1,0.3,0l0.1-0.1v-1.7c0-0.1-0.1-0.2-0.2-0.2c0,0-0.1,0-0.1,0.1l-0.8,0.7
		c-0.3-0.4-1.1-1.1-2.1-1.1c-1.2,0-2,1.3-2,1.3c0,0.1,0,0.1,0,0.2c0,0.1,0.8,1.3,2,1.3C244.7,38.6,245.5,37.8,245.8,37.5z
		 M246.5,36.8v0.8l-0.4-0.4L246.5,36.8z M242.1,37.2c0.2-0.3,0.8-1,1.6-1s1.6,0.7,1.8,1c-0.3,0.3-1,1-1.8,1
		C242.9,38.2,242.3,37.5,242.1,37.2L242.1,37.2z" />
  <circle class="st0" cx="242.8" cy="37" r="0.2" />
  <path class="st0" d="M242.1,35.4c0-0.5-0.4-1-1-1c-0.5,0-1,0.4-1,1c0,0.5,0.4,1,1,1C241.6,36.4,242.1,35.9,242.1,35.4z M241.1,36
		c-0.3,0-0.6-0.3-0.6-0.6s0.3-0.6,0.6-0.6s0.6,0.3,0.6,0.6S241.4,36,241.1,36z" />
  <path class="st0" d="M240.2,36.6c-0.3,0-0.6,0.3-0.6,0.6s0.3,0.6,0.6,0.6s0.6-0.3,0.6-0.6C240.9,36.9,240.6,36.6,240.2,36.6
		L240.2,36.6z M240.2,37.4c-0.1,0-0.2-0.1-0.2-0.2s0.1-0.2,0.2-0.2c0.1,0,0.2,0.1,0.2,0.2l0,0C240.5,37.3,240.4,37.4,240.2,37.4z" />
</g>
</svg>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/utils/Draggable.min.js'></script>

</body>
<script src="{{asset('app.js')}}"></script>

</html>

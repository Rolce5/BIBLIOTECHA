
<!---------- logging page from layouts/header ---------->
<?php
include __DIR__ . '/layouts/header.php';
?>

<!---------- end of logging page from layouts/header ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <link rel="stylesheet" href="../BIBLIOTECHA/public/assests/css/style.css">

</head>
<body>

        <!------------ arts images --------->
        <section class="artsection">
            <div>
                <marquee behavior="fast" direction="lifetime" scrollamount="1"scrolldelay="220">
                    <div class="bookimg">
                    <div class="item" >
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/Art_Age.jpg" alt="gfh" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/Drawing.jpg" alt="vv" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/Histoire_Du_Cameroun.jpeg" alt="sdf" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/Monalisa.jpg" alt="sd" class="image odc" id="odc">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/OIP (1).jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/OIP (2).jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/OIP (3).jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/Power of Art.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/Southern West Cameroon.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/th (1).jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/th.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/The Agony and the Ecstasy.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/The Goldern Age of Sounthern Cameroon.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/The Judgment of paris.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/The Latter of Vincent Classic.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/The man who made Vanessa.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/The shock of the New.jpg" alt="sd" class="image">
                    </div>
                    <div>
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/The Stort Of Art.jpg" alt="sd" class="image">
                    </div>
                   
                    <div>
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/ways of seeing.jpg" alt="sd" class="image">
                    </div>

                </div>
                </marquee>
            </div>

            <a class="prev" onclick="moveItems('.bookimg','right')">&#10094;</a>
            <a class="next" onclick="moveItems('.bookimg','left')">&#10095;</a>

        
        </section>

        <button><a href="#">Art Books</a></button>

            <!------------ end of art images ------>
            


                  <!------------ science images --------->

        <section class="science">
            <div>
            <marquee behavior="fast" direction="lifetime" scrollamount="1"scrolldelay="220">
            <div class="bookimg1">
                <div class="item1" >
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/All About Biology .jpeg" alt="gfh" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Biochemistry.jpeg" alt="vv" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Biological Science.jpeg" alt="sdf" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Chemisrty For The Biosciences.jpeg" alt="sd" class="image odc" id="odc">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Earth Science.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Einstein.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Engineering Geology.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Essentials Of geology.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Freakin Stein.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Goldern Book Of Chemistry Experiments.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Guide To Engineering Geology.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Illustrated Biochemistry.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Industral Chemistry.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Medical Chemistry.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Organic Chemistry.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Principle Of Biochemistry.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/Principle of Chemistry.jpeg" alt="sd" class="image">
                </div>
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/The Biology Book.jpeg" alt="sd" class="image">
                </div>
               
                <div class="item1">
                    <img src="../BIBLIOTECHA/public/assets/images/cat-images/scienceBooks/The Origin Of Species.jpeg" alt="sd" class="image">
                </div>

            </div>
            </marquee>
        </div>
           
        <a class="prev" onclick="moveItems('.bookimg1','right')">&#10094;</a>
        <a class="next" onclick="moveItems('.bookimg1','left')">&#10095;</a>


    </section>
    <button><a href="JavaScript/ii.html">Science Books</a></button>
   

        <!------------ end of science images ------>

         <!------------ business images --------->
         <section class="business">
            <div>
                <marquee behavior="fast" direction="lifetime" scrollamount="1"scrolldelay="220">
                    <div class="bookimg2">
                    <div class="item" >
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/Drive.jpeg" alt="gfh" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/Fat Tails.jpeg" alt="vv" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/Good to reat.jpeg" alt="sdf" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/How To Win Friends $ Influence People.jpeg" alt="sd" class="image odc" id="odc">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/Making it All Work.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/Six Thinking Hats.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/The Infinite Game.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/The Magic Of Thinking Big.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/The Power of Habit.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/Think And Grow Rich.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/To Big To Fail.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/Trump the art of the Deal.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/Who Made My Cheese.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/The Judgment of paris.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/Six Thinking Hats.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/The man who made Vanessa.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/The shock of the New.jpg" alt="sd" class="image">
                    </div>
                    <div>
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/Think And Grow Rich.jpeg" alt="sd" class="image">
                    </div>
                   
                    <div>
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/bussinesbooks/Trump the art of the Deal.jpeg" alt="sd" class="image">
                    </div>

                </div>
                </marquee>
            </div>

            <a class="prev" onclick="moveItems('.bookimg2','right')">&#10094;</a>
            <a class="next" onclick="moveItems('.bookimg2','left')">&#10095;</a>
        
        </section>

        <button><a href="JavaScript/ii.html">Business Books</a></button>

            <!------------ end of business  images ------>

             <!------------ IT images --------->
        <section class="artsection">
            <div>
                <marquee behavior="fast" direction="lifetime" scrollamount="1"scrolldelay="220">
                    <div class="bookimg3">
                    <div class="item" >
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Accelerate-Building-and-Scaling-High-Performing-Technology-Organizations.png" alt="gfh" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Accidental-Empires.jpg" alt="vv" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Accountable-Care.-Bridging-the-Health-Information-Technology-Divide.-1st-Edition.jpg" alt="sdf" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Accounting-Information-Systems-10th-Edition.jpg" alt="sd" class="image odc" id="odc">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Algorithms-to-Live-By-The-Computer-Science-of-Human-Decisions.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Alibaba-The-House-That-Jack-Ma-Built.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Andy-Grove-The-Life-and-Times-of-an-American.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Before-Disrupting-Healthcare-What-Innovators-Need-To-Know.png" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Big-Data-Big-Challenges-A-Healthcare-Perspective-Background-Issues-Solutions-and-Research-Directions.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Elon-Musk-Tesla-SpaceX-and-the-Quest-for-a-Fantastic-Future.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Superintelligence-Paths-Dangers-Strategies-1.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/The-Industries-of-the-Future.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/The-Inevitable-Understanding-the-12-Technological-Forces-That-Will-Shape-Our-Future.png" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/The-Soul-of-a-New-Machine.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Tools-and-Weapons-The-Promise-and-the-Peril-of-the-Digital-Age.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Algorithms-to-Live-By-The-Computer-Science-of-Human-Decisions.jpg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Zero-to-One-Notes-on-Startups-or-How-to-Build-the-Future.jpg" alt="sd" class="image">
                    </div>
                    <div>
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/Elon-Musk-Tesla-SpaceX-and-the-Quest-for-a-Fantastic-Future.jpg" alt="sd" class="image">
                    </div>
                   
                    <div>
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/ITbooks/The-Soul-of-a-New-Machine.jpg" alt="sd" class="image">
                    </div>

                </div>
                </marquee>
            </div>

            <a class="prev" onclick="moveItems('.bookimg3','right')">&#10094;</a>
            <a class="next" onclick="moveItems('.bookimg3','left')">&#10095;</a>
        
        </section>

        <button><a href="JavaScript/ii.html">IT Books</a></button>

            <!------------ end of IT images ------>

             <!------------ Law images --------->
        <section class="artsection">
            <div>
                <marquee behavior="fast" direction="lifetime" scrollamount="1"scrolldelay="220">
                    <div class="bookimg4">
                    <div class="item" >
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/African Law.jpeg" alt="gfh" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/Cameroon Bussines Hand Book.jpeg" alt="vv" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/Constitutional Law in cameroon.jpeg" alt="sdf" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/Crimal Law In Cameroon.jpeg" alt="sd" class="image odc" id="odc">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/download (3).jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/La Nouevel Constitution Du Cameroun.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/Labour Law.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/Law and Government of Cameroon.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/Southern West Cameroon.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/Separatist in Cameroon.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/Southern West Cameroon.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/The Constitution And Governace in Cameroon.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/The East African Lawyer.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/The English Speaking Mobs Of Cameroon.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/Youth and Nation Building In Cameroon.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/La Nouevel Constitution Du Cameroun.jpeg" alt="sd" class="image">
                    </div>
                    <div class="item">
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/Histoire_Du_Cameroun.jpeg" alt="sd" class="image">
                    </div>
                    <div>
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/lawbooks/Youth and Nation Building In Cameroon.jpeg" alt="sd" class="image">
                    </div>
                   
                    <div>
                        <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/ways of seeing.jpg" alt="sd" class="image">
                    </div>

                </div>
                </marquee>
            </div>
            <a class="prev" onclick="moveItems('.bookimg4','right')">&#10094;</a>
            <a class="next" onclick="moveItems('.bookimg4','left')">&#10095;</a>
        
        </section>

        <button><a href="JavaScript/ii.html">Law Books</a></button>

            <!------------ end of Law images ------>

                <!----------general books ---------->
            <section class="artsection">
                <div>
                    <marquee behavior="fast" direction="lifetime" scrollamount="1"scrolldelay="220">
                        <div class="bookimg5">
                        <div class="item" >
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/Jude Deveraux II.jpeg" alt="gfh" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/Forest.jpg" alt="vv" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/Gone With The Wind.jpg" alt="sdf" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/Harry Potter.jpg" alt="sd" class="image odc" id="odc">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/Head.jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/Heart.jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/images.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/Love.jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/The Best Book In The World.jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/The Great Strip.jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/The Hunger Games.jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/The King.jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/The Village.jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/The Wild.jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/The Wood .jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/Drawing.jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/artbooks/ways of seeing.jpg" alt="sd" class="image">
                        </div>
                        <div>
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/The Hunger Games.jpg" alt="sd" class="image">
                        </div>
                       
                        <div>
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/Harry Potter.jpg" alt="sd" class="image">
                        </div>
    
                    </div>
                    </marquee>
                </div>
    
                <a class="prev" onclick="moveItems('.bookimg5','right')">&#10094;</a>
                <a class="next" onclick="moveItems('.bookimg5','left')">&#10095;</a>
            
            </section>
    
            <button><a href="JavaScript/ii.html">Common Books</a></button>
    
                <!------------ end of general images ------>

                  <!----------Story books ---------->
            <section class="artsection">
                <div>
                    <marquee behavior="fast" direction="lifetime" scrollamount="1" scrolldelay="220">
                        <div class="bookimg6">
                        <div class="item" >
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/Bridgerton.jpeg" alt="gfh" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/Bush Crash101.jpeg" alt="vv" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/Guess How Much I Love You.jpeg" alt="sdf" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/Joanna Shupe.jpeg" alt="sd" class="image odc" id="odc">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/images.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/Jude Deveraux.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/Me Before You.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/Love.jpg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/Ruskin Bond.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/The Greatest Survival Story.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/The Last Of Us.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/The Pawsome Adventure.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/The Sneetches.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/The Sound Of The Hours.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/The Survival.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/The Widerness.jpeg" alt="sd" class="image">
                        </div>
                        <div class="item">
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/storybooks/World Best Short Stories.jpeg" alt="sd" class="image">
                        </div>
                        <div>
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/The Hunger Games.jpg" alt="sd" class="image">
                        </div>
                       
                        <div>
                            <img src="../BIBLIOTECHA/public/assets/images/cat-images/generalbooks/Harry Potter.jpg" alt="sd" class="image">
                        </div>
    
                    </div>
                    </marquee>
                </div>
    
                <a class="prev" onclick="moveItems('.bookimg6','right')">&#10094;</a>
                <a class="next" onclick="moveItems('.bookimg6','left')">&#10095;</a>
            
            </section>
    
            <button><a href="JavaScript/ii.html">Story Books</a></button>
    
                <!------------ end of general images ------>
    
    <!----------- end of moving images --------------->

    <script src="..\BIBLIOTECHA\public\assets\js\search_bar.js"></script>
</body>
</html>
<?php
include __DIR__ . '/layouts/footer.php';
?>
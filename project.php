<?php
    /**
         * Creating sessions for new Users
         */
    session_start();
    if(!isset($_SESSION["news"]["userID"]))
        {
            $_SESSION["news"]["userID"] = time();
        }
        $totalScore = 0;

        /**
         * Declaring the question and the answer of the array
         * sections for :
         * headline
         * main text
         * source
         * date
         * author
         */
    function getQuestion($id)
    {
        $question[1]["headline"] = "Tanzania's president dies after Covid rumours";
        $question[1]["question"] = "Covid-sceptic John Magufuli had not been seen in public for more than two weeks, and romours have been circulating about his health. He died on Wednesday at age of 61 from heart complications at a hospital in Dar es Salaam.";
        $question[1]["source"] = "source: bbc.com/news";
        $question[1]["date"]= "date: 18.03.2021";
        $question[1]["author"] = "BBC News";
        $question[1]["answer"] = true;

        $question[2]["headline"] = "Birthdays are vastly improved by being in lockdown - my second is coming up";
        $question[2]["question"] = "We're almost a year into the lockdowns now. I know this, because they began in earnest around my birthday, 21 March. So, poor me, being one of the first to have two birthdays ruined by the pandemic response. I’ll take pity from anyone, but there really is no need on this occasion because I couldn’t be happier about it. I find parties stressful at the best of times. If it’s my own party, I find the experience nothing short of traumatic.";
        $question[2]["source"] = "source: theguardian.com";
        $question[2]["date"]= "date: 17.03.2021";
        $question[2]["author"] = "author: Adrian Chiles";
        $question[2]["answer"] = true;

        $question[3]["headline"] = "Britain pours billions into race to develop world's fastest missile";
        $question[3]["question"] = "The development of new technologies such as hypersonic missiles and laser weapons is to be given a boost from the Ministry of Defence (MoD) with extra money, the Government has announced. The Integrated Review of foreign, defence, security and development policy, launched by the Prime Minister on Tuesday, has committed £6.6 billion for novel military research. The MoD said research into “space, directed energy weapons, and advanced high-speed missiles [will] deliver an enduring military edge”.";
        $question[3]["source"] = "source: telegraph.co.uk/news";
        $question[3]["date"]= "date: 15.03.2021";
        $question[3]["author"] = "author: Dominic Nicholls";
        $question[3]["answer"] = true;

        $question[4]["headline"] = "On bad days I can’t stand up in the shower: I am 31 and have had long Covid since March 2020";
        $question[4]["question"] = "Amy Durant, 31, from Surrey, has been ill with long-Covid since March 2020. I first got coronavirus symptoms around 14 March last year. I don’t know where I caught it but I wasn’t going out much  - and was being careful - so it was most likely the supermarket. By April I still hadn’t recovered and my breathing had deteriorated, I was gasping for breath so I rang 111 for a third time. A few months later, at the end of summer, the brain stuff got really worrying where I was using the wrong words quite a lot in sentences without realising, and I couldn’t spell.";
        $question[4]["source"] = "source: independent.co.uk";
        $question[4]["date"]= "dat: 10.02.2021";
        $question[4]["author"] = "author: Amy Durant";
        $question[4]["answer"] = true;

        $question[5]["headline"] = "Martin Lewis warns every household could face a £1,000 fine from Sunday";
        $question[5]["question"] = "That marks Census Day, with households in England and Wales facing the four figure sum fines if they fail to complete the Office for National Statistics form. With days to go before the deadline experts have warned that ignoring the census letters could land you with a £1,000 fine. Money Saving Expert [MSE] has issued a warning that households in England and Wales could face the hefty fines from Sunday March 21. Money Saving Expert founder and consumer champion Mr Lewis said: 'You can be fined up to £1,000 if you don't complete the Census. Fines are a last resort though.'";
        $question[5]["source"] = "source: mirror.co.uk/news";
        $question[5]["date"]= "date: 10.03.2021";
        $question[5]["author"] = "author: James Rodger";
        $question[5]["answer"] = true;

        $question[6]["headline"] = "Jimmy Savile begged Coleen Nolan to go to his hotel when she was just 14";
        $question[6]["question"] = "The 56-year-old met the paedophile when she appeared on Top Of The Pops with her sisters to perform and has now recalled what happened on Piers Morgan's Life Stories. “He said he had a suite in a hotel and I should go up and see it and he’d look after me. “ Looking horrified, Piers asked her to clarify that she was just 14 and wanted to know how it made her feel. The Loose Women star explained: “Well at the time I just thought you dirty old man. As if I’m going to go up there, I wouldn’t do it anyway. I’ve got four sisters on the stage that would have beaten the crap out of him.”";
        $question[6]["source"] = "source: thesun.co.uk";
        $question[6]["date"]= "date: 17.03.2021";
        $question[6]["author"] = "author: Fay Leyfield";
        $question[6]["answer"] = true;

        $question[7]["headline"] = "From boom to bust - why lockdown hasn't led to more babies";
        $question[7]["question"] = "For those who thought that lockdown would leave couples with little else to do than procreate, there was a surprise - not a baby boom but a baby bust. Research shows that the US is facing the biggest slump in births in a century and in parts of Europe the decline is even steeper. For those who study population the baby bust was not a revelation. 'Having seen how bad the pandemic was I'm not surprised,' says Philip N Cohen, professor of sociology at the University of Maryland. 'But it is still just shocking to see something like this happen in real time.'";
        $question[7]["source"] = "source: bbc.com/news";
        $question[7]["date"]= "date: 18.02.2021";
        $question[7]["author"] = "author: Stephanie Hegarty";
        $question[7]["answer"] = true;

        $question[8]["headline"] = "Why can't Britain handle the truth about Winston Churchill?";
        $question[8]["question"] = "Abaleful silence attends one of the most talked-about figures in British history. You may enthuse endlessly about Winston Churchill “single-handedly” defeating Hitler. But mention his views on race or his colonial policies, and you’ll be instantly drowned in ferocious and orchestrated vitriol. In a sea of fawningly reverential Churchill biographies, hardly any books seriously examine his documented racism. The Black Lives Matter protests last June – during which the word “racist” was sprayed in red letters on Churchill’s statue in Parliament Square, were accompanied by demands for more education on race, empire and the figures whose statues dot our landscapes. Critical assessment is not “character assassination”. Thanks to the groupthink of “the cult of Churchill”, the late prime minister has become a mythological figure rather than a historical one.";
        $question[8]["source"] = "source: theguarian.com";
        $question[8]["date"]= "date: 21.01.2021";
        $question[8]["author"] = "author: Priyamvada Gopal";
        $question[8]["answer"] = true;

        $question[9]["headline"] = "Chelsea cruise through to Champions League quarter-finals with impressive win over Atletico Madrid";
        $question[9]["question"] = "The fear of losing this Champions League tie, as much as not finishing in the top four, cost Frank Lampard his job at Chelsea and so there was further vindication for that decision with his replacement Thomas Tuchel beating Atletico Madrid home and away. This was a statement performance, a perfect performance, the kind that showed no one will want to be paired with Chelsea as they joined Liverpool and Manchester City in Friday’s quarter-final open draw. They were too quick, too slick, too good for currently the best side in Spain and it was capped by two fine breakaway goals. “I am pretty sure no one will want to play against us. There is no need to be afraid and we will take what we get,” Tuchel stated.";
        $question[9]["source"] = "source: telegraph.co.uk";
        $question[9]["date"]= "date: 17.03.2021";
        $question[9]["author"] = "author: Jason Burt";
        $question[9]["answer"] = true; 

        $question[10]["headline"] = "The 2021 Grammys were a soothing distraction";
        $question[10]["question"] = "With performances from Billie Eilish, Cardi B and Harry Styles, this year’s ceremony seemed to benefit from being forced to proceed during a pandemic. But it wasn’t enough to hide the elephants in the room. A pandemic-era awards season is a strange beast. So far, the socially distanced Emmys and the Golden Globes had all the pomp and circumstance of a Zoom family reunion, which is to say they were dull and awkward. The Grammys, despite putting on an entertaining 2021 showcase that reminded viewers of how badly they missed live music, got lucky this time. They had time to assess what not to do, based on previous pandemic award shows; they made history by getting Beyonce onstage to accept a few awards and have a record-breaking moment";
        $question[10]["source"] = "source: independent.co.uk";
        $question[10]["date"]= "date: 05.03.2021";
        $question[10]["author"] = "author: Rachel Brodsky";
        $question[10]["answer"] = true; 
        
        $question[11]["headline"] = "ISIS Takes Credit For Relatives Overstaying Welcome At Thanksgiving";
        $question[11]["question"] = "Experts say that the best way to combat this is to make Aunt Midge sleep on pullout sofa which will wreak havoc on her sciatica and eventualy force her to seek a better night's sleep at a local hotel.";
        $question[11]["source"] = "source: capnews.net";
        $question[11]["date"]= "date: 17.05.2019";
        $question[11]["author"] = "author: Jackson White";
        $question[11]["answer"] = false; 

        $question[12]["headline"] = "Conspiracy theorists think Biden’s DNC speech was pre-recorded because of ‘disappearing’ pin";
        $question[12]["question"] = "John Cardillo, a former New York City police officer and right-wing radio host, suggested on Twitter that something sinister was afoot after claiming that Biden's lapel pin had disappeared mid-speech.'Guys, I despise conspiracy theories, you all know that, but if Biden’s speech wasn’t prerecorded, the cop in me wants to know how his lapel pin disappeared off the same suit and a watch appeared on his left arm as Harris joined him 'right after his acceptance speech,' he wrote.";
        $question[12]["source"] = "source: americanfreepress.net";
        $question[12]["date"]= "date: 23.08.2020";
        $question[12]["author"] = "author: Mikael Thalen";
        $question[12]["answer"] = false; 

        $question[13]["headline"] = "Biden Begs Migrants Not To Come To U.S. Until There Enough Cells To Imprison Everyone";
        $question[13]["question"] = "WASHINGTON—Emphasizing that his administration was doing everything in its power to remedy the situation, President Joe Biden gave a speech Wednesday in which he begged South and Central American migrants not to come to the United States until there were enough jail cells to imprison everyone. “To every man, woman, and child thinking of crossing the border, I urge you to wait until we have the resources in place to intercept, arrest, and incarcerate all of you,” said Biden, who added that the Department of Homeland Security would be working around the clock to erect enough tents, holding pens, and interrogation rooms to accommodate what is expected to be the highest yearly number of apprehensions at the border in the past two decades. “In just a few months’ time, I’m confident we’ll have the cement floors, thin blankets, and barbed wire we need to keep everybody locked up for weeks, if not months, at a time. Believe me, you don’t want to show up here right now, with everyone all crammed together and stacked on top of one another.";
        $question[13]["source"] = "source: theonion.com";
        $question[13]["date"]= "date: 17.03.2021";
        $question[13]["author"] = "author: Unknown";
        $question[13]["answer"] = false;

        $question[14]["headline"] = "Horror! AstraZeneca COVID-19 Vaccine Cause Blood Clots!";
        $question[14]["question"] = "As of this writing, 37 000 cases of blood clots were reported out of the 17 million people who have received the AstraZeneca COVID-19 vaccine. In March 2021, a number of European countries announced that they were temporarily suspending the administration of the AstraZeneca COVID-19 vaccine as a precautionary measure after reports of patients developing blood clots. But while it’s true that more than a dozen countries have temporarily suspended the administration of this vaccine he company, health officials, the World Health Organization and government regulatory bodies have all said that there is no causal link between the vaccine and these blood clots. On March 3, Austria announced that it was suspending the use of a batch of COVID-19 Vaccine from AstraZeneca after a person developed a blood clot and died 10 days after they received their vaccination. This was a precautionary measure to let health officials review the matter. In their announcement, the European Medicine Agency said that there “is currently no indication that vaccination has caused these conditions.”";
        $question[14]["source"] = "source: abcnewsgo.com";
        $question[14]["date"]= "date: 16.03.2021";
        $question[14]["author"] = "author: Dan Evon";
        $question[14]["answer"] = false; 

        $question[15]["headline"] = "WHO Admits: No Direct Evidence Masks Prevent Viral Infection";
        $question[15]["question"] = "In breathless tones, NBC News recently reported1 the existence of a business where mask wearing isn't enforced. In the Naples, Florida, grocery store, hardly anyone wears a mask. The store's owner, who the news station claimed 'is known for his conservative and often controversial viewpoints,' told a reporter he's never worn a mask in his life and never will. The store does have a mask policy posted, but video shows that many customers are fine with not wearing one. There is a mask mandate in Naples, but Florida Gov. Ron DeSantis has issued a ruling that makes enforcement of the rule difficult, NBC said. The irony of the whole thing is that while the media claims mask mandates are based on science and will 'save lives,' this simply isn't true. Science is actually being ignored wholesale and recommendations are primarily pushed based on emotional justifications and triggers. If science were actually followed, universal mask wearing by healthy people would not — indeed could not — be recommended.";
        $question[15]["source"] = "source: mercola.com";
        $question[15]["date"]= "date: 17.02.2021";
        $question[15]["author"] = "author: Dr. Joseph Mercola";
        $question[15]["answer"] = false; 

        $question[16]["headline"] = "PREORDER NOW: The Truth About COVID-19";
        $question[16]["question"] = "On the surface, it looks like health experts and leading health organizations have been calling the shots when it comes to which freedom is being restricted, when, and where. But behind the curtain there is a sinister force running the system and, once again, Dr. Mercola is on top of a topic that no one else is talking about. In his latest book, “The Truth About COVID-19: Exposing the Great Reset, Lockdowns, Vaccine Passports, and the New Normal,” Dr. Mercola and his co-author, Ronnie Cummins, use verifiable sources, facts and data to show that SARS-CoV-2 was lab-engineered and even anticipated by certain global “elites.”";
        $question[16]["source"] = "source: blogs.mercola.com";
        $question[16]["date"]= "date: 17.02.2021";
        $question[16]["author"] = "author: Dr. Joseph Mercola";
        $question[16]["answer"] = false; 

        $question[17]["headline"] = "OOPS: $692 Million In Duplicate PPP Loans Were Issued Amid Up to $100 Billion Lost to Fraud So Far";
        $question[17]["question"] = "If you thought the distribution allocation and creation of the PPP loans couldn’t get any worse, you were so very wrong. “Lenders participating in the Paycheck Protection Program (PPP) distributed the cash to 4,260 borrowers who had already received funds due to multiple technical glitches within the SBA’s loan processing systems, which struggled to process the volumes of loans, the SBA Inspector General wrote in a report. The watchdog did not say how much if any of the $692 million mistakenly distributed by lenders had subsequently been reimbursed by the government. It initially said it would only guarantee one loan per borrower, meaning lenders, rather than the taxpayer, may be on the hook for the error. ";
        $question[17]["source"] = "source: 100percentfedup.com";
        $question[17]["date"]= "date: 13.03.2021";
        $question[17]["author"] = "author: Ulysses S. Tennyson ";
        $question[17]["answer"] = false; 

        $question[18]["headline"] = "Donald J Trump has been found dead";
        $question[18]["question"] = "News reporter found Donald Trump dead at his mansion in Dallas Texas he basically has five houses and he was found to have some kind of chemical in them that will cost a poisonous reactions, and the please came to investigate they found a egg that is in the trash that had some drugs and medicine in it when we found him to his house immediately and got rescue on the way to his house and the family got him we tried to rescue him but he was gone";
        $question[18]["source"] = "source: 12minutos.com";
        $question[18]["date"]= "date: 18.03.2021";
        $question[18]["author"] = "author: Unknown";
        $question[18]["answer"] = false; 

        $question[19]["headline"] = "Are Governments Using COVID to Destroy the Gym Industry?";
        $question[19]["question"] = "The erratic and arbitrary nature of state-imposed lockdown measures has led to the closure of gyms and leisure facilities throughout the United States, as well as in the UK and Europe. Despite this, business owners and their membership have made massive efforts including crowdfunding campaigns, and lobbying government to adopt a more common sense approach to restrictions rather than the state’s usual blanket authoritarian prohibition policy. Tragically, those efforts have all been flatly rejected by governments who seemed determined to crush the industry. Even as governments have mostly succeeded in their effort to shutdown most of the industry, many dedicated owners and their membership haven’t stopped campaigning for their facilities to reopen on the basis that gyms are an essential service – and a key component in maintaining good overall physical and mental public health.";
        $question[19]["source"] = "source: 21stcenturywire.com";
        $question[19]["date"]= "date: 17.01.2021";
        $question[19]["author"] = "author: News wire";
        $question[19]["answer"] = false; 

        $question[20]["headline"] = "UKC News: Questions About Brexit’s ‘New Dawn’, Trump-Kushner’s ‘Deal of Century’ Disaster";
        $question[20]["question"] = "After three and half years of chutes and ladders, Brexit is finally here with pundits touting a ‘New Dawn’ for Britain, but will anything change? Also, we look at Trump & Sons supposed landmark ‘Deal of the Century’ for Israel and Palestine – on closer inspection it’s already an unmitigated political disaster for the White House, and not much better for Tel Aviv either.";
        $question[20]["source"] = "source: 21stcenturywire.com";
        $question[20]["date"]= "date: 31.01.2020";
        $question[20]["author"] = "author: News wire";
        $question[20]["answer"] = false; 
        

        return $question[$id];
    } 

    /**
         * Establishing Connection with the Database
         */
    if(isset($_REQUEST["answer"]) && isset($_REQUEST["userID"]) && isset($_REQUEST["questionID"]))
    {
        $servername = "localhost";
        $database = "project";
        $username = "root";
        $password = "";

    // Create connection

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }


    /**
         * Query to display the total score of the given user
         */
    $sql = "SELECT score FROM users WHERE userID = ".$_REQUEST["userID"]." limit 1"; 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $totalScore = $row["score"];
    }
    }



    /**
         * Checking the state of the requested answers and incrementing the totalScore
         */
    if($_REQUEST["answer"]=="true")
    {
        $answer = true;
    }
    else{
        $answer = false;
    }
    $rightAnswer = getQuestion($_REQUEST["questionID"]);

    if($answer == $rightAnswer["answer"] )
    {
        $totalScore++;
    }
    else{
        
    }

    
    if($_REQUEST["answer1"]=="true")
    {
        $answer = true;
    }
    else{
        $answer = false;
    }
    $rightAnswer = getQuestion($_REQUEST["questionID1"]);

    if($answer == $rightAnswer["answer"] )
    {
        $totalScore++;
    }
    else{
        
    }

    if($_REQUEST["answer2"]=="true")
    {
        $answer = true;
    }
    else{
        $answer = false;
    }
    $rightAnswer = getQuestion($_REQUEST["questionID2"]);

    if($answer == $rightAnswer["answer"] )
    {
        $totalScore++;
    }
    else{
        
    }

    if($_REQUEST["answer3"]=="true")
    {
        $answer = true;
    }
    else{
        $answer = false;
    }
    $rightAnswer = getQuestion($_REQUEST["questionID3"]);

    if($answer == $rightAnswer["answer"] )
    {
        $totalScore++;
    }
    else{
        
    }

    if($_REQUEST["answer4"]=="true")
    {
        $answer = true;
    }
    else{
        $answer = false;
    }
    $rightAnswer = getQuestion($_REQUEST["questionID4"]);

    if($answer == $rightAnswer["answer"] )
    {
        $totalScore++;
    }
    else{
        
    }

    if($_REQUEST["answer5"]=="true")
    {
        $answer = true;
    }
    else{
        $answer = false;
    }
    $rightAnswer = getQuestion($_REQUEST["questionID5"]);

    if($answer == $rightAnswer["answer"] )
    {
        $totalScore++;
    }
    else{
        
    }

    if($_REQUEST["answer6"]=="true")
    {
        $answer = true;
    }
    else{
        $answer = false;
    }
    $rightAnswer = getQuestion($_REQUEST["questionID6"]);

    if($answer == $rightAnswer["answer"] )
    {
        $totalScore++;
    }
    else{
        
    }

    if($_REQUEST["answer7"]=="true")
    {
        $answer = true;
    }
    else{
        $answer = false;
    }
    $rightAnswer = getQuestion($_REQUEST["questionID7"]);

    if($answer == $rightAnswer["answer"] )
    {
        $totalScore++;
    }
    else{
        
    }

    if($_REQUEST["answer8"]=="true")
    {
        $answer = true;
    }
    else{
        $answer = false;
    }
    $rightAnswer = getQuestion($_REQUEST["questionID8"]);

    if($answer == $rightAnswer["answer"] )
    {
        $totalScore++;
    }
    else{
        
    }

    if($_REQUEST["answer9"]=="true")
    {
        $answer = true;
    }
    else{
        $answer = false;
    }
    $rightAnswer = getQuestion($_REQUEST["questionID9"]);

    if($answer == $rightAnswer["answer"] )
    {
        $totalScore++;
    }
    else{
        
    }

    // sql to delete a record
    $sql = "DELETE FROM users WHERE userID = ".$_REQUEST["userID"]." limit 1";

    if ($conn->query($sql) === TRUE) {
    
    } else {
    
    }
    /**
         * Sql query to insert the user with his score from the game
         */
    $sql = "INSERT INTO users (userID, score) VALUES (".$_REQUEST["userID"].", $totalScore)";
    
    if ($conn->query($sql) === TRUE) {
 
} else {
    
}
    
    mysqli_close($conn);
    }


    /**
         * Generating 10 random questiong from the pre-decleared news above
         */
    $questionID = rand(1,20);
    $questionID1 = rand(1,20);
    $questionID2 = rand(1,20);
    $questionID3 = rand(1,20);
    $questionID4 = rand(1,20);
    $questionID5 = rand(1,20);
    $questionID6 = rand(1,20);
    $questionID7 = rand(1,20);
    $questionID8 = rand(1,20);
    $questionID9 = rand(1,20);
    
    $question =  getQuestion($questionID);
    $question1 =  getQuestion($questionID1);
    $question2 =  getQuestion($questionID2);
    $question3 =  getQuestion($questionID3);
    $question4 =  getQuestion($questionID4);
    $question5 =  getQuestion($questionID5);
    $question6 =  getQuestion($questionID6);
    $question7 =  getQuestion($questionID7);
    $question8 =  getQuestion($questionID8);
    $question9 =  getQuestion($questionID9);

    

?>

<!DOCTYPE html>

<html lang="eng">
    <head>
        <meta charset="utf-8" />
        <title> Project </title>
        <link rel="stylesheet" href="./styles/styles.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            
            $.getScript("https://unpkg.com/scroll-out@2.2.3/dist/scroll-out.min.js", function(){
            $(document).ready(function(){
                ScrollOut({
                    threshold: 0.2,
                    once: true
                    });

                });
            });
        </script>
        <style>
            h3 {
                text-align: center;
                color: white;
                font-family: "Righteous", serif;
                font-size: 12em;
                text-shadow: 0.03em 0.03em 0 hsla(230, 40%, 50%, 1);}
            input[type=submit]
            {
                padding: 12px 10px;
                width: 40%;
                margin: 0;
                position: relative;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                border: 0;
                background: linear-gradient(to right, #de48b5 0%,#0097ff 100%); 
                border-radius: 3px;
                margin-top: 10px;
                color: #fff;
                letter-spacing: 1px;
                font-family: 'Rubik', sans-serif;
            }
            .score {
                color:  #F9FEA5;
                font-family: "Righteous", serif;
                font-size: 8em;
                text-shadow: 0.03em 0.03em 0 hsla(230, 40%, 50%, 1);}
            }
            </style>
    </head>
    <body>
        <form action="">
            <input type="hidden" name="userID" value="<?php echo $_SESSION["news"]["userID"]; ?>">
            <input type="hidden" name="questionID" value="<?php echo $questionID;?>">
            <input type="hidden" name="questionID1" value="<?php echo $questionID1;?>">
            <input type="hidden" name="questionID2" value="<?php echo $questionID2;?>">
            <input type="hidden" name="questionID3" value="<?php echo $questionID3;?>">
            <input type="hidden" name="questionID4" value="<?php echo $questionID4;?>">
            <input type="hidden" name="questionID5" value="<?php echo $questionID5;?>">
            <input type="hidden" name="questionID6" value="<?php echo $questionID6;?>">
            <input type="hidden" name="questionID7" value="<?php echo $questionID7;?>">
            <input type="hidden" name="questionID8" value="<?php echo $questionID8;?>">
            <input type="hidden" name="questionID9" value="<?php echo $questionID9;?>">
            <h3>Disinformation Game</h3>
            <div class="score">Your score: <?php echo $totalScore;?></div>
            <div class = "site-wrap">
                <section data-scroll>
                    <h1 data-splitting><?php echo $question["headline"];?></h1>
                    <p><?php echo $question["question"];?></p>
                    <p><?php echo $question["source"];?></p>
                    <p><?php echo $question["date"];?></p>
                    <p><?php echo $question["author"];?></p>
                    <p> What do you think?
                    <input type="radio" name="answer" value="false">Misleading
                    <input type="radio" name="answer" value="true">Correct
                    </p>
                </section>

                <section data-scroll>
                    <h1 data-splitting><?php echo $question1["headline"];?></h1>
                    <p><?php echo $question1["question"];?></p>
                    <p><?php echo $question1["source"];?></p>
                    <p><?php echo $question1["date"];?></p>
                    <p><?php echo $question1["author"];?></p>
                    <p> What do you think?
                    <input type="radio" name="answer1" value="false">Misleading
                    <input type="radio" name="answer1" value="true">Correct
                    </p>
                </section>

                <section data-scroll>
                    <h1 data-splitting><?php echo $question2["headline"];?></h1>
                    <p><?php echo $question2["question"];?></p>
                    <p><?php echo $question2["source"];?></p>
                    <p><?php echo $question2["date"];?></p>
                    <p><?php echo $question2["author"];?></p>
                    <p> What do you think?
                    <input type="radio" name="answer2" value="false">Misleading
                    <input type="radio" name="answer2" value="true">Correct
                    </p>
                </section>

                <section data-scroll>
                    <h1 data-splitting><?php echo $question3["headline"];?></h1>
                    <p><?php echo $question3["question"];?></p>
                    <p><?php echo $question3["source"];?></p>
                    <p><?php echo $question3["date"];?></p>
                    <p><?php echo $question3["author"];?></p>
                    <p> What do you think?
                    <input type="radio" name="answer3" value="false">Misleading
                    <input type="radio" name="answer3" value="true">Correct
                    </p>
                </section>

                <section data-scroll>
                    <h1 data-splitting><?php echo $question4["headline"];?></h1>
                    <p><?php echo $question4["question"];?></p>
                    <p><?php echo $question4["source"];?></p>
                    <p><?php echo $question4["date"];?></p>
                    <p><?php echo $question4["author"];?></p>
                    <p> What do you think?
                    <input type="radio" name="answer4" value="false">Misleading
                    <input type="radio" name="answer4" value="true">Correct
                    </p>
                </section>

                <section data-scroll>
                    <h1 data-splitting><?php echo $question5["headline"];?></h1>
                    <p><?php echo $question5["question"];?></p>
                    <p><?php echo $question5["source"];?></p>
                    <p><?php echo $question5["date"];?></p>
                    <p><?php echo $question5["author"];?></p>
                    <p> What do you think?
                    <input type="radio" name="answer5" value="false">Misleading
                    <input type="radio" name="answer5" value="true">Correct
                    </p>
                </section>

                <section data-scroll>
                    <h1 data-splitting><?php echo $question6["headline"];?></h1>
                    <p><?php echo $question6["question"];?></p>
                    <p><?php echo $question6["source"];?></p>
                    <p><?php echo $question6["date"];?></p>
                    <p><?php echo $question6["author"];?></p>
                    <p> What do you think?
                    <input type="radio" name="answer6" value="false">Misleading
                    <input type="radio" name="answer6" value="true">Correct
                    </p>
                </section>

                <section data-scroll>
                    <h1 data-splitting><?php echo $question7["headline"];?></h1>
                    <p><?php echo $question7["question"];?></p>
                    <p><?php echo $question7["source"];?></p>
                    <p><?php echo $question7["date"];?></p>
                    <p><?php echo $question7["author"];?></p>
                    <p> What do you think?
                    <input type="radio" name="answer7" value="false">Misleading
                    <input type="radio" name="answer7" value="true">Correct
                    </p>
                </section>

                <section data-scroll>
                    <h1 data-splitting><?php echo $question8["headline"];?></h1>
                    <p><?php echo $question8["question"];?></p>
                    <p><?php echo $question8["source"];?></p>
                    <p><?php echo $question8["date"];?></p>
                    <p><?php echo $question8["author"];?></p>
                    <p> What do you think?
                    <input type="radio" name="answer8" value="false">Misleading
                    <input type="radio" name="answer8" value="true">Correct
                    </p>
                </section>

                <section data-scroll>
                    <h1 data-splitting><?php echo $question9["headline"];?></h1>
                    <p><?php echo $question9["question"];?></p>
                    <p><?php echo $question9["source"];?></p>
                    <p><?php echo $question9["date"];?></p>
                    <p><?php echo $question9["author"];?></p>
                    <p> What do you think?
                    <input type="radio" name="answer9" value="false">Misleading
                    <input type="radio" name="answer9" value="true">Correct
                    </p>
                </section>

            </div>
            

            <input type="submit" value="submit">

            
        </form>
    </body>
</html>
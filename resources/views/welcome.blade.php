@extends('layouts.master')

@section('title', '')

@section('bodyClass', $bodyClass)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 text-right">
              <h1>ＪＵＮＫＥＲ本部</h1>
              <small>Last update Thu, 24 Sep 2015 14:23:44 PDT</small class="text-right">
            </div>
            <div class="col-xs-12 col-md-8">
                <p>Welcome to the Junker HQ Homepage. Here you will find the actual status as well as all my info, research and source code on several text dumping (scripts for translation) projects, as well as general info and images related to Snatcher, Policenauts and Metal Gear. On the side, it also contains a <a href="http://junkerhq.net/MGS2/">Metal Gear Solid 2 Ending Analysis</a>, that tries to clarify the matters the game touches near its conclusion.</p>

                <p>The main target of this project is to make Snatcher and <a href="http://policenauts.net/">Policenauts</a> available to a wider public (me included). That means creating a patch or a suitable distributable method for anyone having a Snatcher CD-ROM to create an English translation (Spanish maybe) version. The actual platforms are Playstation, Saturn, MSX2 and PC-Engine (TG-16).</p>

                <p>MSX, PC-8801 mkII, Sega CD, PSX and Sega Saturn dumps of Snatcher available, also MGS for the PSX and the full script dump from Metal Gear Solid 2: Sons of Liberty</p>

                <p>Regarding Policenauts, we have released a patch to play the Playstation version. You can read all about it at <a href="http://policenauts.net/">Policenauts.net</a> and the <a href="http://forums.junkerhq.net/">forums</a>.</p>

                <img class="img-responsive" src="{{asset('img/TSP.gif')}}" />
            </div>
        </div>
        <div class="row frontList">
            <div class="col-xs-12 col-md-4 text-right">
                <h2>Kojima Related</h2>
                <h4><a href="http://junkerhq.net/nstatus.php">Status updates</a></h4>
            </div>
            <div class="col-xs-12 col-md-8">
                <p class="lead descLead"><a href="http://junkerhq.net/kojima.html">Kojima Hideo Game Gallery</a></p>
                <p class="descP">Scans, Information and related stuff of Snatcher, MGS, ZOE, Policenauts and other Kojima games.</p>

                <p class="lead descLead"><a href="http://junkerhq.net/Snatcher/index.html">Snatcher Versions and Merchandise</a></p>
                <p class="descP">Scans and Information on all versions of the game.</p>
                
                <p class="lead descLead"><a href="http://policenauts.net/oldsite.html">Policenauts Versions and Merchandise</a></p>
                <p class="descP">Scans and Information on most versions of the game.</p>

                <p class="lead descLead"><a href="http://sdatcher.net/">Suda 51's SDATCHER translation</a></p>
                <p class="descP">The translation of Suda's Snatcher prequel, presented as a subtitled audio presentation in English and Spanish.</p>

                <p class="lead descLead"><a href="http://forums.junkerhq.net/">Kojima Game Discussion Forums</a></p>
                <p class="descP">Forums open for Snatcher, Policenauts, Metal Gear, Boktai, ZOE and more</p>
                
                <p class="lead descLead"><a href="http://junkerhq.net/MGS2/index.html">Metal Gear Solid 2 Ending Analysis, Gene and Meme</a></p>
                <p class="descP">An essay on AI, genes, memes and more stuff regarding Metal Gear Solid 2 (spoilers)</p>

                <p class="lead descLead"><a href="">Snatcher MSX2 translation</a></p>
                 <p class="descP">Excellent work by Takamichi, contains FAQs, Misc info, Links, etc. Also the Spanish version of the scripts is up now.</p>
                
                <p class="lead descLead"><a href="">Snatcher Music Arrangements</a></p>
                 <p class="descP">New versions of Snatcher and SD Snatcher tracks made by fans.</p>

                <p class="lead descLead"><a href="">Snatcher Sketches</a></p>
                 <p class="descP">Sketches taken from different printed sources</p>
            </div>
        </div>
    </div>
@endsection
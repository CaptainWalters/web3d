<!-- Main contents -->
<main role="main" class="container" id="models">
    <!--Holds model -->
    <div class="row">
        <!-- X3D Model -->
        <div class="col-sm-8">
            <div class="card text-left">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <?php
                        foreach ($data->components as $part) {
                            $tid=$part->id;
                            echo '<li class="nav-item">
                                <a id="modelNav" class="nav-link" href="?modelview&id='.$tid.'">'.$part->name.'</a>
                                </li>';
                        };
                        ?>
                    </ul>
                </div>
                
                <div class="card-body">
                    <!-- X3D model -->
                    
                    <h1 id="modelTitle" class="card-title">
                        <?php echo $data->components[$id]->name ?>
                    </h1>
                    <!-- X3D code here -->
                    
                    <x3d class="model3D">
                        <scene>
                        <inline nameSpaceName="model" mapDEFToID="true"
                            onclick="animateModel();" url="assets/x3d/'.$data->components[$id]->name.'.x3d"> </inline>
                        </scene>
                    </x3d> 
                    <p id="modelDescription" class="card-text drinksText">
                        <?php echo $data->components[$id]->short_description ?>
                    </p>
                    
                </div>
            </div>
        </div>


        <!-- 3D image gallery -->
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-header gallery-header">
                    <h3 class="card-title">Gallery</h3>
                </div>
                <div class="card-body">
                    <div class="card-title title_gallery"></div>
                    <div class="gallery" id="gallery"></div>
                    <div class="card-text description_gallery"></div>
                </div>
            </div>
        </div>
    
    <?php
        // $dirname = "images/";
        // $images = scandir($dirname);
        // shuffle($images);
        // $ignore = Array(".", "..");
        // foreach($images as $curimg){
        //     if(!in_array($curimg, $ignore)) {
        //         echo "<li><a href='".$dirname.$curimg."'><img src='img.php?src=".$dirname.$curimg."&w=300&zc=1' alt='' /></a></li>n ";
        //     }
        // }
    ?>
    </div>

        
    <!-- interaction panels -->
    <div id="interaction" class="row">
    <!-- Camera Views -->
    <div class="col-sm-4">
        <div class="card text-left">
            <div class="card-header">
                <h3 class="card-title x3dCameraSubtitle">Camera Views</h3>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-custom btn-responsive camera-font">Default</a>
                <a href="#" class="btn btn-custom btn-responsive camera-font">Back</a>
                <a href="#" class="btn btn-custom btn-responsive camera-font">Left</a>
                <a href="#" class="btn btn-custom btn-responsive camera-font">Right</a>
                <a href="#" class="btn btn-custom disabled btn-responsive camera-font">Off</a>
                <div class="card-text x3dCameraDescription drinksText">
                <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                </div>
            </div>
        </div>
    </div>
    <!-- animation controls -->
    <div class="col-sm-4">
        <div class="card text-left">
            <div class="card-header">
                <h3 class="card-title x3dCameraSubtitle">Animation</h3>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-custom btn-responsive" onclick="spin();">RotX</a>
                <a href="#" class="btn btn-custom btn-responsive">RotY</a>
                <a href="#" class="btn btn-custom btn-responsive">RotZ</a>
                <a href="#" class="btn btn-custom btn-responsive" onclick="stopRotation();">Stop</a>
                <div class="card-text x3dAnimationDescription drinksText">
                <p>These buttons select a range of X3D animation options</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Column for the render type and lighting controls -->
    <div class="col-sm-4">
        <div class="card text-left">
            <div class="card-header">
                <h3 class="card-title x3dCameraSubtitle">Render and Lighting Options</h3>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-custom btn-responsive">Poly</a>
                <a href="#" class="btn btn-custom btn-responsive" onclick="wireframe();">Wire</a>
                <a href="#" class="btn btn-custom btn-responsive" onclick="headlight();">Headlight</a>
                <a href="#" class="btn btn-custom btn-responsive">Default</a>
                <div class="card-text x3dRenderDescription drinksText">
                <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                </div>
            </div>
        </div>
    </div> <!-- end of lighting -->
    </div> <!-- end of interactions -->
</main>

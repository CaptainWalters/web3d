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
                    
                    <x3d class="model3D" id="x3d">
                        <scene>
                        <inline nameSpaceName="model" mapDEFToID="true"
                            url='assets/x3d/<?php echo $data->components[$id]->name ?>.X3D'></inline>
                        </scene>
                    </x3d> 
                    <p id="modelDescription" class="card-text">
                        <?php echo $data->components[$id]->short_description ?>
                    </p>
                    
                </div>
            </div>
        </div>


        <!-- 3D image gallery -->
        <div class="col-sm-4">
            <div class="card text-left">
                <div class="card-header about-header">
                    <h3 class="card-title">About</h3>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <p>
                            These models were build using Shap3r, converted to 3DS Max where lighting and views were added, then exported to VRML97 and converted into X3D files for display.</br>
                            At present, Views only work on the dice and no render is animated
                        </p>
                    </div>
                </div>
            </div>
        </div>
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
                <a href="#" class="btn btn-custom btn-responsive camera-font" onclick="defaultView()">Default</a>
                <a href="#" class="btn btn-custom btn-responsive camera-font" onclick="backView()">Back</a>
                <a href="#" class="btn btn-custom btn-responsive camera-font" onclick="sideView()">Side</a>
                <div class="card-text x3dCameraDescription">
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
                <a href="#" class="btn btn-custom btn-responsive disabled" onclick="animate();">Animate</a>
                <a href="#" class="btn btn-custom btn-responsive disabled" onclick="stop();">Stop</a>
                <div class="card-text x3dAnimationDescription">
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
                <a href="#" class="btn btn-custom btn-responsive" onclick="wireframe();">Wire</a>
                <a href="#" class="btn btn-custom btn-responsive" onclick="headlight();">Headlight</a>
                <a href="#" class="btn btn-custom btn-responsive disabled">Default</a>
                <div class="card-text x3dRenderDescription">
                <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                </div>
            </div>
        </div>
    </div> <!-- end of lighting -->
    </div> <!-- end of interactions -->
</main>

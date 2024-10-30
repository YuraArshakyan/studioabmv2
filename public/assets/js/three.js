import * as THREE from 'three';
import { GLTFLoader } from 'https://unpkg.com/three@0.119.1/examples/jsm/loaders/GLTFLoader.js';


function projects() {
    const canvas = document.querySelector('.projects')


    canvas.addEventListener('scroll', function(e){
        e.preventDefault();
    }, {passive:false});

    const renderer = new THREE.WebGLRenderer( { alpha: true } );

    renderer.setSize(canvas.clientWidth, canvas.clientHeight);
    let color = 0x000000;
    renderer.setClearColor(color, 0);
    setInterval(() => {
        color = 0x000000;
        rerenderBG();
    }, 4000);
    renderer.setClearColor(color, 0);

    function rerenderBG(){
        renderer.setClearColor(color, 0);
    }
    renderer.setPixelRatio(window.devicePixelRatio);

    renderer.setAnimationLoop( animate );
    canvas.appendChild(renderer.domElement);


    console.log(canvas.clientWidth);


    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(100, canvas.clientWidth / canvas.clientHeight, 1, 1000);


    





    
    const images = [];
    const radius = 3; 
    let current_index = 4;
    for (let i = 0; i < 5; i++) {
        const video = document.createElement('video');
        const texture = new THREE.VideoTexture(video);
        
        video.src = 'projects_content/' + i + '.mp4'; 
        video.load();
        video.loop = true;
        video.muted = true; 
        video.play();

        const geometry = new THREE.PlaneGeometry(1.5, 1);
        {
            const material = new THREE.MeshBasicMaterial({ map: texture, side: THREE.OneS });
            const plane = new THREE.Mesh(geometry, material);

            const angle = (i / 4) * (Math.PI * 2); // Full circle in radians
            const x = radius * Math.cos(angle);
            const z = radius * Math.sin(angle);
            const y = 0; // Set y position if needed

            plane.position.set(x, y, z);
            images.push(plane);           
            scene.add(plane);
        }
    }

    camera.position.set(0, 0, 5);
    camera.lookAt(0,0,0);

    let speed = 0.001;
    canvas.addEventListener('mouseover', () => {
        console.log('stop');
        speed = 0.005;       
    })
    canvas.addEventListener('mouseout', () => {
        console.log('stop');
        speed = 0.001;       
    })
    if(window.innerWidth > 1024){
        canvas.addEventListener('click', () => {
            console.log('stop');
            if(speed == 0.001 || speed == 0.005){
                speed = 0;       
            }else{
                speed == 0.001;
            }
        })
    }else{
        canvas.addEventListener('click', () => {
            console.log('stop');
            if(speed == 0.001){
                speed = 0.005;
            }else if(speed == 0.005){
                speed = 0.000;
            }else{
                speed = 0.001;
            }
        })
    }
    
    
    let mesh;
    const groundGeometry = new THREE.PlaneGeometry(20, 20, 32, 32);
    groundGeometry.rotateX(-Math.PI / 2);
    const groundMaterial = new THREE.MeshStandardMaterial({
        color: 0x555555,
        side: THREE.DoubleSide
    });


    const spotLight = new THREE.SpotLight(0xffffff, 3, 0, 1);
    spotLight.position.set(1, -3, 15);
    scene.add(spotLight);

    const loader = new GLTFLoader().setPath('/assets/js/models/');
    loader.load( 'abmstl.gltf', ( gltf ) => {
        mesh = gltf.scene;
        mesh.position.set(0, 0, 0);
        mesh.rotation.x = 0;
        mesh.rotation.y = 90;
        mesh.color = 0xffffff;
        scene.add(mesh);

    })
    
    function animate() {
        scene.rotation.y -= speed;
        images.forEach(plane => {
            plane.lookAt(camera.position);
        });
        
        if (mesh) {
        }
        renderer.render(scene, camera);
    }
    animate();
}
projects();
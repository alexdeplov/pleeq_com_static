import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

let scene, camera, renderer, controls, points;

function init() {
    // --- Basic Scene Setup ---
    scene = new THREE.Scene();
    camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 15; // Move camera back

    renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);

    // --- Controls ---
    controls = new OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true; // Smooth camera movement
    controls.dampingFactor = 0.05;
    controls.screenSpacePanning = false;
    controls.minDistance = 5;
    controls.maxDistance = 50;

    // --- Grid Helper (like in the image background) ---
    const gridHelper = new THREE.GridHelper(50, 50, 0x444444, 0x888888); // size, divisions, colorCenterLine, colorGrid
    // gridHelper.rotation.x = Math.PI / 2; // Rotate grid if needed
    scene.add(gridHelper);

    // --- Particle Globe ---
    const radius = 5;
    const numPoints = 20000; // Increase for more density
    const geometry = new THREE.BufferGeometry();
    const positions = [];
    const colors = [];

    const color = new THREE.Color();

    for (let i = 0; i < numPoints; i++) {
        // Generate points randomly on the surface of a sphere
        const phi = Math.acos(-1 + (2 * i) / numPoints); // Distributes points more evenly than random angles
        const theta = Math.sqrt(numPoints * Math.PI) * phi;

        const x = radius * Math.sin(phi) * Math.cos(theta);
        const y = radius * Math.sin(phi) * Math.sin(theta);
        const z = radius * Math.cos(phi);

        positions.push(x, y, z);

        // --- Coloring Logic ---
        // Simple coloring based on position (creates gradient patches)
        // Normalize position to range 0-1 for color mapping
        const nx = (x / radius) * 0.5 + 0.5;
        const ny = (y / radius) * 0.5 + 0.5;
        const nz = (z / radius) * 0.5 + 0.5;

        // Example: Use position components to influence HSL color
        // You can experiment heavily here to get different patterns!
        // Try mapping to different channels (r,g,b) or using noise functions for more complex patterns.
        color.setHSL(nx * 0.7, 0.8, ny * 0.5 + 0.25); // Hue influenced by x, Lightness by y

        // Alternative: Simpler RGB mapping
        // color.setRGB(nx, ny, nz);

        colors.push(color.r, color.g, color.b);
    }

    geometry.setAttribute('position', new THREE.Float32BufferAttribute(positions, 3));
    geometry.setAttribute('color', new THREE.Float32BufferAttribute(colors, 3));

    const material = new THREE.PointsMaterial({
        size: 0.15,         // Adjust size of particles
        vertexColors: true, // Use the colors defined in the geometry
        sizeAttenuation: true // Points get smaller further away
    });

    points = new THREE.Points(geometry, material);
    scene.add(points);

    // --- Handle Window Resize ---
    window.addEventListener('resize', onWindowResize, false);

    // --- Start Animation ---
    animate();
}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
}

function animate() {
    requestAnimationFrame(animate);

    // Update controls
    controls.update();

    // Optional: Add subtle rotation
    if (points) {
        points.rotation.y += 0.0005;
        points.rotation.x += 0.0002;
    }

    renderer.render(scene, camera);
}

// --- Run Initialization ---
init();
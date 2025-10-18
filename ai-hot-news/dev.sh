#!/bin/bash

# Hugo Development Script
# This script helps you run Hugo in different modes

echo "Hugo Development Helper"
echo "======================"
echo ""
echo "Choose an option:"
echo "1. Local development (root domain)"
echo "2. Local development (with /ai-hot-news/ subdirectory)"
echo "3. Build for production"
echo "4. Build for production and serve locally"
echo ""

read -p "Enter your choice (1-4): " choice

case $choice in
    1)
        echo "Starting local development server at http://localhost:1313/"
        hugo server --config hugo.local.toml --bind 0.0.0.0 --port 1313 --disableFastRender
        ;;
    2)
        echo "Starting local development server at http://localhost:1313/ai-hot-news/"
        hugo server --config hugo.local.toml --baseURL "http://localhost:1313/ai-hot-news/" --bind 0.0.0.0 --port 1313 --disableFastRender
        ;;
    3)
        echo "Building for production..."
        hugo --cleanDestinationDir
        echo "Production build complete! Files are in the 'public' directory."
        ;;
    4)
        echo "Building for production and serving locally..."
        hugo --cleanDestinationDir
        echo "Serving production build at http://localhost:1313/"
        hugo server --bind 0.0.0.0 --port 1313 --disableFastRender
        ;;
    *)
        echo "Invalid choice. Please run the script again."
        ;;
esac

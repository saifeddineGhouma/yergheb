/* ------------------------------------------------------------------------------
 *
 *  # Dimple.js - scatter matrix
 *
 *  Demo of scatter matrix. Data stored in .tsv file format
 *
 *  Version: 1.0
 *  Latest update: August 1, 2015
 *
 * ---------------------------------------------------------------------------- */

document.addEventListener('DOMContentLoaded', function() {

    // Construct chart
    var svg = dimple.newSvg("#dimple-scatter-matrix", "100%", 500);


    // Chart setup
    // ------------------------------

    d3.tsv("../../../../global_assets/demo_data/dimple/demo_data.tsv", function (data) {


        // Create chart
        // ------------------------------

        // Define chart
        var myChart = new dimple.chart(svg, data);

        // Set bounds
        myChart.setBounds(0, 0, "100%", "100%");

        // Set margins
        myChart.setMargins(70, 25, 10, 45);


        // Create axes
        // ------------------------------

        // Horizontal
        var x = myChart.addCategoryAxis("x", ["Channel", "Price Tier"]);

        // Vertical
        var y = myChart.addCategoryAxis("y", "Owner");

        // Display grid lines
        x.showGridlines = true;
        y.showGridlines = true;


        // Construct layout
        // ------------------------------

        // Add scatter
        myChart.addSeries("Price Tier", dimple.plot.bubble);


        // Add legend
        // ------------------------------

        var myLegend = myChart.addLegend(0, 5, "100%", 0, "right");


        // Add styles
        // ------------------------------

        // Font size
        x.fontSize = "12";
        y.fontSize = "12";

        // Font family
        x.fontFamily = "Roboto";
        y.fontFamily = "Roboto";

        // Legend font style
        myLegend.fontSize = "12";
        myLegend.fontFamily = "Roboto";


        //
        // Draw chart
        //

        // Draw
        myChart.draw();

        // Position legend text
        myLegend.shapes.selectAll("text").attr("dy", "1");


        // Resize chart
        // ------------------------------

        // Add a method to draw the chart on resize of the window
        $(window).on('resize', resize);
        $('.sidebar-control').on('click', resize);

        // Resize function
        function resize() {

            // Redraw chart
            myChart.draw(0, true);

            // Position legend text
            myLegend.shapes.selectAll("text").attr("dy", "1");
        }
    });
});
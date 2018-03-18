function createBarChart(data, width, height, color) {

    var chart = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    chart.style.width = width;
    chart.style.height = height;

    var max = data[0];
    for (var i = 0; i < data.length; i++) {
        if (max < data[i]) max = data[i];
    }

    var scale = width / max;
    var barWidth = Math.floor(height / data.length);

    for (var i = 0; i < data.length; i++) {
        var bar = document.createElementNS("http://www.w3.org/2000/svg", "rect");
       
        var barHeight = data[i] * scale;
        bar.setAttribute("width", barHeight + "px");
        bar.setAttribute("height", barWidth - 4 + "px");

        bar.setAttribute("x", 0);
        bar.setAttribute("y", barWidth * i );

        bar.style.fill = color;
        bar.dataset.value = data[i];

        bar.addEventListener("mouseover", onOver);
        bar.addEventListener("mouseout", onOut);

        chart.appendChild(bar);
    }

    function onOver(e) { 
        this.style.fill = "red";
        var label = document.getElementById("label");
        label.style.left = e.clientX + "px";
        label.style.top = e.clientY + "px";
        label.innerText = "value: "+ this.dataset.value;
        label.style.display = "block";        
    }

    function onOut(e) { 
        this.style.fill = color; 
        var label = document.getElementById("label");
        label.style.display = "none";        
    }

    return chart;
}
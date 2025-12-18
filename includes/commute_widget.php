<div class="commute-intelligence page-container mt-4">
    <div style="border: 2px dashed #ff7e5f; padding: 15px; border-radius: 10px; background: #fffcfb;">
        <h5><i class="fas fa-route"></i> AI Commute Predictor</h5>
        <div class="row align-items-end">
            <div class="col-md-8">
                <label>Enter your College/Office address:</label>
                <input type="text" id="dest-address" class="form-control" placeholder="e.g., IIT Delhi or Google Office">
            </div>
            <div class="col-md-4">
                <button class="btn btn-block" style="background: #ff7e5f; color:white;" onclick="predictCommute()">Predict Travel Time</button>
            </div>
        </div>
        <div id="commute-result" class="mt-3" style="display:none;">
            <p>🚗 Estimated Drive: <b>15-20 mins</b></p>
            <p>🚇 Nearest Metro: <b>800m away</b></p>
            <p><small><i>AI Tip: This area is highly rated for evening safety.</i></small></p>
        </div>
    </div>
</div>

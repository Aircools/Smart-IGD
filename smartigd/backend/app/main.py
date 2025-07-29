from fastapi import FastAPI
import joblib
import numpy as np

app = FastAPI()
model = joblib.load("app/models/xgb_referral_model.pkl")
scaler = joblib.load("app/models/scaler.pkl")

@app.post("/predict")
async def predict(
    age: int, bp_systolic: int, bp_diastolic: int,
    heart_rate: int, temperature: float, gcs: int,
    oxygen_saturation: float, chest_pain: int
):
    input_data = scaler.transform([[age, bp_systolic, bp_diastolic, heart_rate, 
                                  temperature, gcs, oxygen_saturation, chest_pain]])
    prediction = model.predict(input_data)[0]
    return {"referral_needed": bool(prediction)}
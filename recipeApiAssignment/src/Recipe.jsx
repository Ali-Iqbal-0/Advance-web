import React from 'react';
import './recipe.css';

const Recipe = ({ title, calories, image ,ingredients}) => {
  return (
    <div className='recipe-card'>
      <h1 className='recipe-title'>{title}</h1>
      <ol>
        {ingredients.map(ingredient=>(
            <li>{ingredient.text}</li>
        ))}
      </ol>
      <h4>Calories :</h4>
     <p className='recipe-calories'>{calories}</p>
      <img className='recipe-image' src={image} alt='' />
    </div>
  );
};

export default Recipe;

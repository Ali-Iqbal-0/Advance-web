import React, { useEffect, useState, useCallback } from 'react';
import axios from 'axios';
import Recipe from './Recipe';
import './App.css';

const App = () => {
  const App_Key = "1cd8816be26aea327467f141f79f188d";
  const App_Id = "b91681d5";
  const [list, setlist] = useState('apple');
  const [recipes, setRecipes] = useState([]);
  const [search, setSearch] = useState('');

  const getRecipes = useCallback(async () => {
    try {
      const response = await axios.get(
        `https://api.edamam.com/api/recipes/v2?type=public&q=${list}&app_id=${App_Id}&app_key=${App_Key}`
      );
      const data = response.data.hits;
      setRecipes(data);
    } catch (error) {
      console.error(error);
    }
  }, [list, App_Id, App_Key]);

  const updateSearch = (e) => {
    setSearch(e.target.value);
  };

  const getSearch = (e) => {
    e.preventDefault();
    setlist(search);
    setSearch('');
  };

  useEffect(() => {
    getRecipes();
  }, [getRecipes]);

  return (
    <>
      <h2>Recipe Search API</h2>
      <form className='search-form' onSubmit={getSearch}>
        <div className="wrap">
          <div className="search">
            <input
              type="text"
              className="searchTerm"
              placeholder="What are you looking for?"
              value={search}
              onChange={(e) => updateSearch(e)}
            />
            <button type="submit" className="searchButton">
              Search
            </button>
          </div>
        </div>
      </form>
      <div className='grid-container'>
        {recipes.map((recipe) => (
          <Recipe
            key={recipe.recipe.label}
            title={recipe.recipe.label}
            calories={recipe.recipe.calories}
            image={recipe.recipe.image}
            ingredients={recipe.recipe.ingredients}
          />
        ))}
      </div>
    </>
  );
};

export default App;

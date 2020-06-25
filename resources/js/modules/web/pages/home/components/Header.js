import React from "react";

export default function Header() {
  return <header className="bg-back text-white">
    <div className="container text-center">
      <h1>Jubaer Hossain</h1>
      <p className="lead">Bsc in CSE</p>
      <p className="lead">Fullstack Developer</p>
      <p className="lead"><i className="fa fa-heart text-danger" />{`{ PHP, JavaScript, Node, MySQL, MongoDB }`}</p>
    </div>
  </header>
}

Header.displayName = 'HomePageHeader'

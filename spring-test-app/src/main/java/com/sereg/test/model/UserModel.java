package com.sereg.test.model;

import java.io.Serializable;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.OneToOne;
import javax.persistence.Table;

@Entity
@Table(name = "users")
public class UserModel implements Serializable {

	private static final long serialVersionUID = -6359533976897746539L;

		@Id
		@GeneratedValue
		private long id;

		@Column(name = "name")
		private String name;
		
		@OneToOne(fetch = FetchType.LAZY,
	            cascade =  CascadeType.ALL,
	            mappedBy = "userModel")
	    private AdvertisementModel advertisementModel;

		protected UserModel() {
		}

		public long getId() {
			return id;
		}

		public void setId(long id) {
			this.id = id;
		}

		public String getName() {
			return name;
		}

		public void setName(String name) {
			this.name = name;

//		public UserModel(String name) {
//			this.name = name;
//		}
//
//		public String toString() {
//			return String.format("User[id=%d, name=%s']", id, name);
//		}

	}


}
